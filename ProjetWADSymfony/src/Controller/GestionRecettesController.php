<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionRecettesController extends AbstractController
{
    #[Route('/gestion/recettes', name: 'app_gestion_recettes')]
    public function index(): Response
    {
        return $this->render('gestion_recettes/index.html.twig', [
            'controller_name' => 'GestionRecettesController',
        ]);
    }
}
