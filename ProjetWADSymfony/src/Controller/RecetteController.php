<?php

namespace App\Controller;

use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\TypeDePlat;
use App\Form\RecetteType;
use App\Enum\Preparations;
use App\Repository\NoteRepository;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/recette')]
final class RecetteController extends AbstractController
{
    public ManagerRegistry $doctrine;
   
    public function __construct(ManagerRegistry $doctrine )
    {
        $this->doctrine = $doctrine;
        
    }
    #[Route(name: 'app_recette_index')]
    public function index(RecetteRepository $recetteRepository , NoteRepository $noteRepository): Response
    {
        $recettes = $recetteRepository->findAll();
        if (empty($recettes)) {
            throw $this->createNotFoundException('Aucune recette trouvée.');
        }
    
        $moyennesNotes = [];
        $nombreNotes = [];
    
        foreach ($recettes as $recette) {
            $notes = $noteRepository->findBy(['recette' => $recette]);
            $nombreNotes[$recette->getId()] = count($notes);
    
            if ($nombreNotes[$recette->getId()] > 0) {
                $sommeNotes = array_sum(array_map(fn($note) => $note->getValeur(), $notes));
                $moyennesNotes[$recette->getId()] = round($sommeNotes / $nombreNotes[$recette->getId()], 1);
            } else {
                $moyennesNotes[$recette->getId()] = 0;
            }
        }
    
        $vars = [
            'recettes' => $recettes,
            'saisons' => Saison::cases(),
            'typeDePlats' => TypeDePlat::cases(),
            'origines' => Origine::cases(),
            'preparations' => Preparations::cases(),
            'moyennesNotes' => $moyennesNotes,
            'nombreNotes' => $nombreNotes
        ];
                
        return $this->render('recette/index.html.twig',$vars);
    }

    #[Route('/new', name: 'app_recette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recette = new Recette();

        $form = $this->createForm(RecetteType::class, data: $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur = $this->getUser();
            $recette->setUtilisateur($utilisateur);
            $entityManager->persist($recette);
            $entityManager->flush();

            
    
            return $this->redirectToRoute('app_utilisateur_recettes', ['id' => $this->getUser()->getId()]);    
        }   

        return $this->render('recette/new.html.twig', [
            'recette' => $recette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_recette_show', methods: ['GET'])]
    public function show(Recette $recette ): Response
    {
        
        return $this->render('recette/show.html.twig', [
            'recette' => $recette,
            'saisons' => Saison::cases(),
            'typeDePlats' => TypeDePlat::cases(),
        ]);
    }

    // #[Route('/{id}/edit', name: 'app_recette_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(RecetteType::class, $recette);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_recette_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('recette/edit.html.twig', [
    //         'recette' => $recette,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{id}', name: 'app_recette_delete')]
    public function delete(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recette->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($recette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_utilisateur_recettes');
    }


    //////////////// recherche avec ajax //////////////

//     #[Route('/recettes/rechercheAjax', name : 'ParTitreAjax')]
// public function rechercheAjax(Request $req, RecetteRepository $rep, SerializerInterface $serializer) : Response
// {
//     $form = $this->createForm(RechercheRecetteType::class);
//     $form ->handleRequest($req);

//     if ($form->isSubmitted() && $form->isValid()) {
        
//         $recettes = $rep->rechercheRecetteFiltres($form->getData());  //($form->getData()) c un array 
//         // dd($recettes);

        
//         $recettesJson = $serializer->serialize($recettes,'json', [AbstractNormalizer::ATTRIBUTES => ['id','titre', 'description', 'image','utilisateur' => ['nom']]]);

//         return new Response($recettesJson);
//     }
//     $vars = ['form' => $form];

//     return $this->render('gestion_recettes/recherche_form.html.twig', $vars);
// }

// #[Route('/gestion/recettes/rechercheAjax/resultats', name : 'rechercheParTitreResultatAjax')]
// public function rechercheResultatAjax(){
//     return $this->render('recette/index.html.twig');
    
// }



 

    /////////////// afficher une recette sans ajax //////////////
    #[Route('/gestion/recettes/afficher/{id}', name : 'afficherUneRecette')]
    public function afficherUneRecette(RecetteRepository $recette, $id, NoteRepository $noteRepository) 
    {
        $recette = $recette->find($id);

        if (!$recette) {
            throw $this->createNotFoundException('Recette non trouvée.');
        }
    
        // Calcul de la moyenne des notes pour cette recette
        $notes = $noteRepository->findBy(['recette' => $recette]);
        $moyenneNote = 0;
        $nombreNotes = count($notes);
    
        if ($nombreNotes > 0) {
            $sommeNotes = array_sum(array_map(function($note) {
                return $note->getValeur();
            }, $notes));
            $moyenneNote = round($sommeNotes / $nombreNotes, 1);
        }
    
        $vars = [
            'recette' => $recette,
            'moyenneNote' => $moyenneNote,
            'nombreNotes' => $nombreNotes
        ];

        return $this->render('recette/show.html.twig', $vars);
    }

    /////////////// afficher les recettes par categorie //////////////
    #[Route( '/gestion/recettes/afficher/{typeRecherche}/{valeur}', name: 'afficherRecetteRecherche')]
    public function afficherRecetteParCategorie(RecetteRepository $rep, SerializerInterface $serializer, string $typeRecherche, string $valeur): Response
    {
        // Validate the parameters
        if (empty($typeRecherche) || empty($valeur)) {
            return new JsonResponse(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        // Fetch recipes based on the search criteria
        $recettes = $rep->rechercheRecetteCategorie($typeRecherche, $valeur);

        // Check if recipes were found
        if (empty($recettes)) {
            return new JsonResponse(['message' => 'No recipes found'], Response::HTTP_NOT_FOUND);
        }

        // Serialize the recipes to JSON
        $recettesJson = $serializer->serialize($recettes, 'json', [
            AbstractNormalizer::ATTRIBUTES => ['id', 'titre', 'image', 'utilisateur' => ['nom']]
        ]);

        // Return the JSON response
        return new JsonResponse($recettesJson, Response::HTTP_OK, [], true); // true for JSON response
    }
}
 
   