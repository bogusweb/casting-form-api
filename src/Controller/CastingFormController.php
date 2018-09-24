<?php

namespace App\Controller;


use App\Entity\CastingCategory;
use App\Entity\CastingForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class CastingFormController extends AbstractController
{

    /**
     *
     * @Route("/api/CastingForm")
     * @Method({"POST"})
     *
     * @return JsonResponse
     */
    public function insertAction()
    {
        $request = Request::createFromGlobals();

        $serializer = new Serializer(array(new DateTimeNormalizer()));

        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());

        $birthDate = $serializer->denormalize($request->request->get('birthDate'), \DateTime::class);

        $castingCategory = $this->getDoctrine()->getRepository(
            CastingCategory::class)->find($request->request->get('castingCategory')
        );

        $entityManager = $this->getDoctrine()->getManager();
        $castingForm = new CastingForm();

        $castingForm->setName($request->request->get('name'));
        $castingForm->setSurname($request->request->get('surname'));
        $castingForm->setSex($request->request->get('sex'));
        $castingForm->setPhone($request->request->get('phone'));
        $castingForm->setEmail($request->request->get('email'));
        $castingForm->setBirthDate($birthDate);
        $castingForm->setPlaceOfResidence($request->request->get('placeOfResidence'));
        $castingForm->setNationality($request->request->get('nationality'));
        $castingForm->setApprovalClause($request->request->get('approvalClaouse'));
        $castingForm->setApprovalProcessing($request->request->get('approvalProcessing'));
        $castingForm->setCastingCategory($castingCategory);

        $entityManager->persist($castingForm);
        $entityManager->flush();

        return new JsonResponse(['status' => true, 'data' => ['id' => $castingForm->getId()]], Response::HTTP_CREATED);
    }

}