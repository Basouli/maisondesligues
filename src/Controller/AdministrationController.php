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
     * @Route("menuCreation", name="_menuCreation")
     */
    public function menuCreation(): Response
    {
        //radio btn : atelier, thème ou vacation
   
        
        return $this->render('administration/creationMenu.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    
    /**
     * @Route("creerAtelier", name="_creer_Atelier")
     */
    public function creerAtelier(): Response
    {
        return $this->render('administration/creationAtelier.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
   
    /**
       * @Route("creerVacacion", name="_creer_Vacacion")
     */
    public function creerVacacion(): Response
    {
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /**
        * @Route("creerTheme", name="_creer_Theme")
     */
    public function creerTheme(): Response
    {
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
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
