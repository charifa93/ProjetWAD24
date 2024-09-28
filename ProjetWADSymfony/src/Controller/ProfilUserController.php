<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilUserController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/profil', name: 'afficherUser')]
    public function afficherUser(): Response
    {
        $user = new Utilisateur();
        $user = $this->getUser();

        $vars = ['user' => $user];
        return $this->render('profil_user/afficher_utilisateur.html.twig', $vars);
    }


}
