<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionRecettesController extends AbstractController
{
    #[Route('/gestion/recettes/afficher')]
      
   public function selectAll(RecetteRepository $recettes)
   {
       $ALLRecettes = $recettes->findAll();

       return $this->render('gestion_recettes/afficherRcettes.html.twig', [
           'recettes' => $ALLRecettes]);
   }

}