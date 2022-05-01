<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/inscription_atelier/", name="app_inscription_atelier")
*/
class AtelierController extends AbstractController
{
    
    // LICENCIE _______________________________________________________________________________________________________ LICENCIE
    
    /**
     * @Route("inscription", name="_inscription")
     */
    public function inscription(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * @Route("inscription_submit", name="_inscription_submit")
     */
    public function inscriptionSubmit(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * 
     */
    private function inscriptionCheck()
    {
        
    }
    
    /**
     * @Route("inscription_modify", name="_inscription_modify")
     */
    public function inscriptionModify(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    // USER _______________________________________________________________________________________________________ USER
    
    /**
     * @Route("inscription_list", name="_inscription_list")
     * IsGranted("ROLE_USER")
     */
    public function inscriptionList(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * @Route("creer_atelier", name="_creer_atelier")
     * IsGranted("ROLE_USER")
     */
    public function creerAtelier(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * @Route("creer_vacation", name="_creer_vacation")
     * IsGranted("ROLE_USER")
     */
    public function creerVacation(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    // ADMIN _______________________________________________________________________________________________________ ADMIN
    
    //
}