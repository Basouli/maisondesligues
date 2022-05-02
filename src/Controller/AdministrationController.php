<?php

namespace App\Controller;


use App\Entity\Atelier;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AtelierType;

//use App\Repository\NavireRepository;

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
    public function creerAtelier(Atelier $atelier, Request $request, ObjectManager $manager): Response
    {
        // $atelier = new Atelier();
        // $atelier->setNbPlaceMaxi(500);

        // $form = $this->createForm(AtelierType::class, $atelier);
        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid()){

        //     $atelier = $form->getLibelle();
        //     $manager->persist($atelier);
        //     $manager->flush();
        //     $this->addFlash('notification', "L'atelier a bien été enregistré");
        // }


        return $this->render('administration/creationAtelier.html.twig', [
            // 'formAtelier' => $form->createView()
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
