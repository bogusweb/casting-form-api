<?php
/**
 * Created by PhpStorm.
 * User: bogus
 * Date: 24/09/2018
 * Time: 20:11
 */

namespace App\Controller;


use App\Entity\CastingCategory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CastingCategoryController extends AbstractController
{

    /**
     * @Route("/api/CastingCategories")
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function list(SerializerInterface $serializer)
    {

        $castingCategories = $this->getDoctrine()
            ->getRepository(CastingCategory::class)
            ->findAll();

        if (!$castingCategories) return new JsonResponse(['status' => false], Response::HTTP_NO_CONTENT);

        $response = $serializer->serialize(
            [
                'data' => $castingCategories,
                'status' => true
            ],
            'json',
            ['json_encode_options' => JSON_UNESCAPED_SLASHES]
        );

        return new JsonResponse($response, Response::HTTP_OK, [], true);
    }

    /**
     * Matches /api/CastingCategories/*
     *
     * @Route("/api/CastingCategories/{id}")
     *
     * @param $id
     * @return JsonResponse
     */
    public function show($id, SerializerInterface $serializer)
    {

        $castingCategory = $this->getDoctrine()
            ->getRepository(CastingCategory::class)
            ->find($id);

        if (!$castingCategory) return new JsonResponse(['status' => false, 'msg' => 'No record found with the given id']);

        $response = $serializer->serialize(
            [
                'data' => $castingCategory,
                'status' => true
            ],
            'json',
            ['json_encode_options' => JSON_UNESCAPED_SLASHES]
        );

        return new JsonResponse($response, Response::HTTP_OK, [], true);
    }
}