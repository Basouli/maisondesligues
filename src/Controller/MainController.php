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
        AtelierRepository $atelierRepository,
        ThemeRepository $themeRepository,
        VacationRepository $vacationRepository,
        CategorieChambreRepository $categorieChambreRepository,
        ProposerRepository $proposerRepository,
        HotelRepository $hotelRepository,
        CongresRepository $congresRepository
    ): Response {



        $ateliers = $atelierRepository->findAll();
        $themes = $themeRepository->findAll();

        $congres= $congresRepository->find(1);
        
        $proposer = $proposerRepository->findAll();
        $hotel = $hotelRepository->findAll();

        $vacations = $vacationRepository->findAll();
        $categorieChambre = $categorieChambreRepository->findAll();

        return $this->render('home/home.html.twig', [
            'controller_name' => 'MainController',
            'ateliers' => $ateliers,
            'themes' => $themes,
            'vacations' => $vacations,
            'categorieChambres' => $categorieChambre,
            'tarifs' => $proposer,
            'hotels' => $hotel,
            'congres' => $congres
        ]);
    }
}
