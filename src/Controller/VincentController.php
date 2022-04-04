<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VincentController extends AbstractController
{
    /**
     * @Route("/vincent", name="app_vincent")
     */
    public function index(): Response
    {
        return $this->render('vincent/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}
