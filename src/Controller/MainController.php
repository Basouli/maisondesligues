<?php

namespace App\Controller;

use App\Entity\CategorieChambre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AtelierRepository;
use App\Repository\CategorieChambreRepository;
use App\Repository\CongresRepository;
use App\Repository\HotelRepository;
use App\Repository\NuiteRepository;
use App\Repository\ProposerRepository;
use App\Repository\ThemeRepository;
use App\Repository\VacationRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index(
        CongresRepository $congresRepository
    ): Response {
        
        $congres = $congresRepository->find(1);
        
        return $this->render('home/home.html.twig', [
            'controller_name' => 'MainController',
            'congres' => $congres
        ]);
    }
    
    /**
     * @Route("/ateliers", name="_ateliers")
     */
    public function atelier(
        AtelierRepository $atelierRepository,
        ThemeRepository $themeRepository
    ): Response {

        $ateliers = $atelierRepository->findAll();
        $themes = $themeRepository->findAll();
        
        return $this->render('atelier/tousAtelier.html.twig', [
            'controller_name' => 'MainController',
            'ateliers' => $ateliers,
            'themes' => $themes
        ]);
    }
    
    /**
     * @Route("/hotels", name="_hotels")
     */
    public function hotels(
        VacationRepository $vacationRepository,
        CategorieChambreRepository $categorieChambreRepository,
        ProposerRepository $proposerRepository,
        HotelRepository $hotelRepository
    ): Response {

        $proposer = $proposerRepository->findAll();
        $hotel = $hotelRepository->findAll();

        $vacations = $vacationRepository->findAll();
        $categorieChambre = $categorieChambreRepository->findAll();
        
        return $this->render('hotel/tousHotel.html.twig', [
            'controller_name' => 'MainController',
            'vacations' => $vacations,
            'categorieChambres' => $categorieChambre,
            'tarifs' => $proposer,
            'hotels' => $hotel
        ]);
    }

}
