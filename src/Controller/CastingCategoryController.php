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
     * @Route("/CastingCategories", name="casting_categories")
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getCastingCategories(SerializerInterface $serializer)
    {
        $castingCategories = $this->getDoctrine()
            ->getRepository(CastingCategory::class)
            ->findAll();

        $data = $serializer->serialize($castingCategories, 'json',  ['json_encode_options' => JSON_UNESCAPED_SLASHES]);

        return new JsonResponse(array('data' => $data));
    }
}