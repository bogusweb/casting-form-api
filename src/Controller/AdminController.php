<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

class AdminController extends BaseAdminController {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @param Request $request
     * @return string
     */
    public function genPdfAction()
    {
        $request = Request::createFromGlobals();

        $entityType = $request->query->get('entity');
        $id = $request->query->get('id');

        $castingForm = $this->getDoctrine()->getRepository('App:CastingForm');
        $castinCategory = $this->getDoctrine()->getRepository('App:CastingCategory');

        if ($entityType == 'CastingForm') {
            $entityCastingForm = $castingForm->find($id);

            $entityCastingCategory = $castinCategory->find($entityCastingForm->getCastingCategory());

            $html = $this->renderView('pdf/form.html.twig', array(
                'form'  => $entityCastingForm,
                'category' => $entityCastingCategory
            ));

        } else {
            $entityCastingCategory = $castinCategory->find($id);
            $entityCastingForms = $castingForm->findBy(['castingCategory' => 1], ['id' => 'DESC']);

            $html = $this->renderView('pdf/category.html.twig', array(
                'forms'  => $entityCastingForms,
                'category' => $entityCastingCategory
            ));
        }

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        return $mpdf->Output();
    }

}