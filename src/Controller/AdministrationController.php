<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
* @Route("admin/", name="_admin")
* IsGranted("ROLE_USER")
*/
class AdministrationController extends AbstractController
{
    /**
     * Permet de consulter les inscriptions
     * @Route("voirInscriptions", name="_creer")
     */
    public function inscriptionList(/*NavireRepository $repo*/): Response
    {
        //$ateliers = $repo->findAll();
        
        return $this->render('inscription_atelier/voirtous.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
            //'ateliers' => $ateliers,
        ]);
    }
    
    // CREER ___________________________________________________________________________________________________ CREER
    
    /**
     * @Route("creer", name="_creer")
     */
    public function creer(): Response
    {
        //radio btn : atelier, thème ou vacation
        //javascript adapter le form
        
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * @Route("creer_submit", name="_creer_submit")
     */
    public function creerSubmit(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * 
     */
    private function creerAtelier()
    {
        //
    }
    
    /**
     * 
     */
    private function creerVacacion()
    {
        //
    }
    
    /**
     * 
     */
    private function creerTheme()
    {
        //
    }
    
    // MODIFIER __________________________________________________________________________________________________ MODIFIER
    
    /**
     * @Route("modifier", name="_modifier")
     */
    public function modifier(): Response
    {
        //radio btn : atelier, thème ou vacation
        //ajax, liste de ce qui existe de la selection
        
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
     * @Route("modifier_submit", name="_modifier_submit")
     */
    public function modifierSubmit(): Response
    {
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
}
