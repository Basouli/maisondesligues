<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/inscription_atelier/", name="app_inscription_atelier")
*/
class InscriptionAtelierController extends AbstractController
{
    /**
     * @Route("form", name="_form")
     */
    public function form(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
}
