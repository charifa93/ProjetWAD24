<?php

namespace App\Controller;

use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Entity\Commentaire;
use App\Enum\TypeDePlat;
use App\Form\RecetteType;
use App\Form\CommentaireType;
use App\Enum\Preparations;
use App\Repository\NoteRepository;
use App\Repository\RecetteRepository;
use Doctrine\DBAL\Query\Limit;
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
            //  dd($recette);
            $utilisateur = $this->getUser();
            $recette->setUtilisateur($utilisateur);
            $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );

    $recette->setImage($newFilename);
    $recette->setDatePublication(new \DateTimeImmutable());
}
            $index = 0;
            foreach ($recette->getEtapes() as $etape) {
                $etape->setOrdre($index);
                $index++;
            }
            $entityManager->persist($recette);
            $entityManager->flush();

            
    
            return $this->redirectToRoute('app_utilisateur_recettes', ['id' => $this->getUser()->getId()]);    
        }   

        return $this->render('recette/new.html.twig', [
            'recette' => $recette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_recette_show')]
    public function show(Recette $recette,Request $request,EntityManagerInterface $entityManager , RecetteRepository $rep ): Response {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setRecette($recette);
            $commentaire->setDateCommentaire(new \DateTime());
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_recette_show', ['id' => $recette->getId()]);
        }
        $ingredients = [];
        foreach ($recette->getDetailRecette() as $detail) {
            $ingredients[] = [
                'ingredient' => $detail->getIngredient(),
                'quantite' => $detail->getQuantite(),
                'unite' => $detail->getUnite(),
            ];
        }
        $etapes = [];
        foreach ($recette->getEtapes() as $etape) {
            $etapes[] = [
                    'ordre' => $etape->getOrdre(),
                    'titre' => $etape->getTitre(),
                    'description' => $etape->getDescription(),
            ];
        }
        $recettesSimilaires = $rep->findBy(['origine' => $recette->getOrigine()]);


        return $this->render('recette/show.html.twig', [
            'recette' => $recette,
            'ingredients' => $ingredients,
            'etapes' => $etapes,
            'recettesSimilaires' => $recettesSimilaires,
            'commentaireForm' => $form->createView(),
        ]);
    }


    // #[Route('/{id}/edit', name: 'app_recette_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(RecetteType::class, $recette);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_recette_index', []);
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

      ///////////// afficher les recettes par categorie //////////////
      #[Route('/gestion/recettes/afficher/{typeRecherche}/{valeur}', name: 'afficherRecetteRecherche')]
      public function RechercherParCategorie(RecetteRepository $rep, SerializerInterface $serializer, Request $req): Response
      {
  
          $typeRecherche = $req->get('typeRecherche');
          $valeur = $req->get('valeur');
  
          // dump($valeur);
          // dd($typeRecherche);
          
          if (isset($typeRecherche) && isset($valeur)) {
  
              $recettes = $rep->rechercheRecetteCategorie ($typeRecherche, $valeur);
  
              $recettesJson = $serializer->serialize($recettes, 'json', [AbstractNormalizer::ATTRIBUTES => ['id', 'titre', 'image', 'utilisateur' => ['nom']]]);
  
              return new Response($recettesJson);
          }  
      }

   
   





    
}
 
   