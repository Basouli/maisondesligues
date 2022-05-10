<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \App\Entity\Activite;

class ActiviteController extends AbstractController
{
    /**
     * @Route("/activite", name="app_activite")
     */
    public function index(): Response
    {
        return $this->render('activite/index.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }
    
    /**
     * @Route("/activite/creer", name="_creer")
     * @IsGranted("ROLE_ADMIN")
     */
    public function creer(Request $request, \Doctrine\ORM\EntityManagerInterface $manager) : Response {
        $port = new Activite();
        
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($activite);
            $manager->flush();
            return $this->redirectToRoute('home');
        }
        
        return $this->render('activite/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
