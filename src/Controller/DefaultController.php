<?php
/**
 * Created by PhpStorm.
 * User: bogus
 * Date: 24/09/2018
 * Time: 21:30
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="default_index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {

        return new JsonResponse(['test' => 'test']);
//        return $this->render('default/index.html.twig');
    }
}