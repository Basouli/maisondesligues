<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThomasController extends AbstractController
{
    /**
     * @Route("/thomas", name="app_thomas")
     */
    public function index(): Response
    {
        return $this->render('thomas/index.html.twig', [
            'controller_name' => 'ThomasController',
        ]);
    }
}
