<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\AjouterRecetteFormType;
use App\Repository\RecetteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class GestionRecettesController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    #[Route('/gestion/recettes/afficher')] 
   public function selectAll(RecetteRepository $recettes)
   {
       $ALLRecettes = $recettes->findAll();

       return $this->render('gestion_recettes/afficherRcettes.html.twig', [
           'recettes' => $ALLRecettes]);
   }

   #[Route('/gestion/recettes/ajouter', name : 'ajouter')]
   public function ajouter(Request $req)
   {
      $recette = new Recette();
      $form = $this->createForm(AjouterRecetteFormType::class, $recette);
      $form->handleRequest($req);

      if($form->isSubmitted() && $form->isValid()){
          $em = $this->doctrine->getManager();
          $em->persist($recette);
          $em->flush();
      }
      $vars = ['form']


      
       


       return $this->render('gestion_recettes/ajouterRecette.html.twig');
   }

}