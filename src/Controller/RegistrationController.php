<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\LicencieRepository;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(LicencieRepository $licencieRepository, Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $nomLicencie = "";
        
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('plainPassword')->getData() == $form->get('plainPasswordBis')->getData()) {
                
                $numLicence = $form->get('numlicencie')->getData();
                $licencie = $licencieRepository->findBynumlicence($numLicence)[0];
                //$licencie = $licencieRepository->findOneByNumLicence($form->get('numlicencie')->getData());
                
                if (true) { //Licencie not null
                    
                    $user->setEmail($licencie->getMail());
                
                    $user->setRoles(array("ROLE_INSCRIT"));

                    $user->setLicencie($licencie);

                    $user->setNumlicencie($numLicence);

                    $user->setPassword(
                        $userPasswordEncoder->encodePassword(
                            $user,
                            $form->get('plainPassword')->getData()
                        )
                    );

                    $entityManager->persist($user);
                    $entityManager->flush();

                    return $this->redirectToRoute('app_main');
                } else {
                    $this->get('session')->getFlashBag()->add('notification', 'Aucun licencie reconnu sous le numéro ' . $numLicence);
                    return $this->redirectToRoute('app_register');
                }
            } else {
                $this->get('session')->getFlashBag()->add('notification', 'Les Mot-de-passe ne sont pas similaires');
                return $this->redirectToRoute('app_register');
            }
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'nomLicencie' => $nomLicencie
        ]);
    }
}
