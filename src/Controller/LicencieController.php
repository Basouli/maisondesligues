<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("licencie/", name="_licencie")
*/
class LicencieController extends AbstractController
{
    /**
     * @Route("index", name="_index")
     */
    public function index(): Response
    {
        //
        return $this->render('inscription_atelier/index.html.twig', [
            'controller_name' => 'InscriptionAtelierController',
        ]);
    }
    
    /*
     *  1. L'employé sélectionne à l'aide de boutons radios ou dans un menu la demande d'inscription au congrès.
        2. Le système affiche ses informations personnelles et son numéro de licence.
        3. Le licencié a la possibilité de modifier son adresse mail.
        4. Le licencié sélectionne les ateliers auxquels il désire accéder.
        5. Le licencié saisit éventuellement les nuités selon le modèle de la fiche d'inscription.
        6. Le licencié saisit éventuellement les repas de l'accompagnants selon le modèle de la fiche
        d'inscription.
        7. Le licencie enregistre son inscription à l'aide d'un bouton.
        8. Le système affiche le montant de son inscription
        9. Le licencié valide son inscription. On ne vous demande pas de vous occuper du paiement.
        10. Un mail est envoyé au Licencié avec le détail de son inscription et le montant dû
     */
    
}
