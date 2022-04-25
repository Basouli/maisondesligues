<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasilController extends AbstractController
{
    /**
     * @Route("/basil", name="app_basil")
     */
    public function index(): Response
    {
        return $this->render('basil/index.html.twig', [
            'controller_name' => 'BasilController',
        ]);
    }
}
