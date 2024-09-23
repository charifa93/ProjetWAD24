<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilUserController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

//     #[Route('/profil', name: 'afficherUser')]
//     public function afficherUser(): Response
//     {
//         $user = new Utilisateur();
//         $user = $this->getUser();
//         return $this->render('profilUser/profilUser.html.twig')
        
// }

}
