<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/compte/", name="app_compte")
*/
class CompteController extends AbstractController
{
    /**
     * @Route("inscription", name="_inscription")
     */
    public function inscription(): Response
    {
        //numéro de licencié.
        //mdp
        //mdp bis
        
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    
    /**
     * @Route("inscription_submit", name="_inscription_submit")
     */
    public function inscriptionSubmit(): Response
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    
    /**
     * 
     */
    private function checkIntegrityInscription()
    {
        //
    }
    
    // PASSWORD __________________________________________________________________________________________________ PASSWORD
    
    /**
     * @Route("lost_password", name="_lost_password")
     */
    public function lostPassword(): Response
    {
        //adresse mail ou numéro de licence
        
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    
    /**
     * @Route("lost_password_submit", name="_lost_password_submit")
     */
    public function lostPasswordSubmit()
    {
        //si ok, envoyer mail de changement
    }
    
    /**
     * @Route("change_password", name="_change_password")
     */
    public function changePassword(): Response
    {
        //mdp
        //mdp bis
        
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    
    /**
     * @Route("change_password_submit", name="_change_password_submit")
     */
    public function changePasswordSubmit()
    {
        //si ok, envoyer mail de confirmation de changement de mdp
    }
    
}
