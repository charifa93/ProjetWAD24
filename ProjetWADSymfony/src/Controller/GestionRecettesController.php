<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\AjouterRecetteFormType;
use App\Form\RechercheRecetteType;
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
    #[Route('/gestion/recettes/afficher', name : 'afficher')] 
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
      $form = $this->createForm(AjouterRecetteFormType::class, $recette ,
       array('action' => $this->generateUrl('ajouter'), 'method' => 'POST'));
      $form->handleRequest($req);

      if($form->isSubmitted() && $form->isValid()){
          $em = $this->doctrine->getManager();
          $em->persist($recette);
          $em->flush();

        return $this->redirectToRoute('afficher');
      }
      

      return $this->render('gestion_recettes/ajouterRecette.html.twig', [
          'form' => $form->createView()
      ]);

   }
   #[Route('/gestion/recettes/modifier/{id}', name : 'modifier')]
   public function modifier(Recette $recette, Request $req)
   {
       $form = $this->createForm(AjouterRecetteFormType::class, $recette);
       $form->handleRequest($req);

       if($form->isSubmitted() && $form->isValid()){
           $em = $this->doctrine->getManager();
           $em->persist($recette);
           $em->flush();

           return $this->redirectToRoute('afficher');
       }

       return $this->render('gestion_recettes/modifierRecette.html.twig', [
           'form' => $form->createView()
       ]);
   }
   #[Route('/gestion/recettes/rechercher', name : 'rechercher')]
   public function rechercher(Request $req , RecetteRepository $recette)
   {     
        $form = $this->createForm(RechercheRecetteType::class);
        $form ->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $recette = $this->doctrine->getRepository(Recette::class)->findBy(['titre' => $recette->getTitre()]);
            return $this->render('gestion_recettes/afficherRcettes.html.twig', ['recette' => $recette]);
        }
    
    return $this->render('gestion_recettes/rechercherRecette.html.twig', ['form' => $form]);
 
   }
}

