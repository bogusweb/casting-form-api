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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CastingCategoryController extends AbstractController
{

    /**
     * @Route("/CastingCategories", name="casting_categories")
     */
    public function getCastingCategories()
    {
        $castingCategories = $this->getDoctrine()
            ->getRepository(CastingCategory::class)
            ->findAll();

        if (!$castingCategories) {
            return new JsonResponse(['status' => 'error'], 200);
        }

//        $serializer = $this->get('jms_serializer');
//        $response = $serializer->serialize($castingCategories,'json');

        return new JsonResponse(array('data' => $castingCategories));
    }
}