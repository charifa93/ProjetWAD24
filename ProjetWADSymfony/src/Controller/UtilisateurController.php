<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Recette;
use App\Form\RecetteType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;




#[Route('/utilisateur')]
final class UtilisateurController extends AbstractController
{
    public ManagerRegistry $doctrine;
   
    public function __construct(ManagerRegistry $doctrine )
    {
        $this->doctrine = $doctrine;
        
    }

    #[Route(name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

   
    

    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_utilisateur_edit')]
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_delete')]
    public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/profil', name: 'app_utilisateur_profil', methods: ['GET'])]
    public function profil(Utilisateur $utilisateur ): Response
    {
        


        return $this->render('utilisateur/profilUser.html.twig', [
            'utilisateur' => $utilisateur
        ]);
    }


    // afficher les recettes de l'utilisateur ////
    #[Route('/{id}/recettes', name:'app_utilisateur_recettes')]
    public function mesRecettes(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/mesRecettes.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }


    // /////////::ajouter une recette a  list  Favoris d'utilisateur connecter /////////////////
    #[Route('/{id}/favoris', name:'app_utilisateur_favoris')]
    #[ParamConverter("utilisateur", class: "App\Entity\Utilisateur")]
    public function favoris(Utilisateur $utilisateur, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        $utilisateur->addFavorisRecette($recette);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($utilisateur);
        $entityManager->persist($recette);
        $entityManager->flush();
       
        return $this->render('utilisateur/favoris.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_recette_delete')]
    public function deleteRecette(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recette->getId(), $request->get('_token'))) {
            // Check if the user is authorized to delete the recipe
            if ($this->getUser() === $recette->getUtilisateur()) {
                $entityManager->remove($recette);
                $entityManager->flush();
                
                $this->addFlash('success', 'La recette a été supprimée avec succès.');
            } else {
                $this->addFlash('danger', 'Vous n\'avez pas les droits pour supprimer cette recette.');
            }
        }
    
        return $this->redirectToRoute('app_utilisateur_recettes', ['id' => $this->getUser()->getId()]);
    }

    ///////// modofier recette ////////////
  
}
