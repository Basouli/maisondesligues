<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    
    /*
     * Route("/oper/test", name="_test")
     * IsGranted("ROLE_OPER")
     */
    public function test(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
