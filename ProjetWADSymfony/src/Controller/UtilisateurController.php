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
use Symfony\Component\HttpFoundation\JsonResponse;




#[Route('/utilisateur')]
final class UtilisateurController extends AbstractController
{
    public ManagerRegistry $doctrine;
   
    public function __construct(ManagerRegistry $doctrine )
    {
        $this->doctrine = $doctrine;
        
    }

    // #[Route(name: 'app_utilisateur_index')]
    // public function index(UtilisateurRepository $utilisateurRepository): Response
    // {
    //     return $this->render('utilisateur/index.html.twig', [
    //         'utilisateurs' => $utilisateurRepository->findAll(),
    //     ]);
    // }

    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
/////////////////////////:edit utilisateur ://////////////////////////////
    #[Route('/{id}/edit', name: 'app_utilisateur_edit')]
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = $this->getUser();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateur_profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    // #[Route('/{id}', name: 'app_utilisateur_delete')]
    // public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->getPayload()->getString('_token'))) {
    //         $entityManager->remove($utilisateur);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('accueil', );
    // }



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
    public function favoris(Utilisateur $utilisateur, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        $utilisateur->addFavorisRecette($recette);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($utilisateur);
        $entityManager->flush();
       
        return $this->render('utilisateur/mesFavoris.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    // ///////// supprimer une recette d'utilisateur connecter /////////////////

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

    ///////// modofier recette  dans mesRecettes //////////////#
#[Route('/{id}/recettes/edit', name: 'app_recette_edit')]  
public function editRecette(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(RecetteType::class, $recette);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_utilisateur_recettes', ['id' => $this->getUser()->getId()]);
    }

    return $this->render('recette/edit.html.twig', [
        'recette' => $recette,
        'form' => $form,
    ]);
}

//////////////////////////// modifier la photo de profil ////////////////

#[Route('/upload/photo', name: 'upload_photo', methods: ['POST'])]
public function uploadPhoto(Request $request, EntityManagerInterface $entityManager, Security $security): JsonResponse
{
    $photo = $request->files->get('photo');
    $utilisateur = $security->getUser(); // utilisateur connecté

    if (!$utilisateur) {
        return new JsonResponse(['error' => 'Utilisateur non connecté'], 403);
    }

    if ($photo) {
        $newFilename = uniqid().'.'.$photo->guessExtension();

        $photo->move(
            $this->getParameter('photos_directory'),
            $newFilename
        );

        // Supprimer l'ancienne photo si besoin
        $anciennePhoto = $utilisateur->getPhoto();
        if ($anciennePhoto) {
            $ancienFichier = $this->getParameter('photos_directory') . '/' . $anciennePhoto;
            if (file_exists($ancienFichier)) {
                unlink($ancienFichier);
            }
        }

        // Enregistrement BDD
        $utilisateur->setPhoto($newFilename);
        $entityManager->persist($utilisateur);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'filename' => $newFilename]);
    }

    return new JsonResponse(['error' => 'Aucun fichier reçu'], 400);
}


}
