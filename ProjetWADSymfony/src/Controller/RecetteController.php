<?php

namespace App\Controller;

use App\Enum\Saison;
use App\Entity\Recette;
use App\Enum\TypeDePlat;
use App\Form\RecetteType;
use App\Form\RechercheRecetteType;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/recette')]
final class RecetteController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    #[Route(name: 'app_recette_index', methods: ['GET'])]
    public function index(RecetteRepository $recetteRepository ): Response
    {
       
        $vars =['recettes' => $recetteRepository->findAll(),
                'saisons' => Saison::cases(),
                'typeDePlats' => TypeDePlat::cases()];
                
        return $this->render('recette/index.html.twig',$vars);
    }

    #[Route('/new', name: 'app_recette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recette = new Recette();
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recette);
            $entityManager->flush();

            return $this->redirectToRoute('app_recette_index', [], Response::HTTP_SEE_OTHER);
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

    #[Route('/{id}/edit', name: 'app_recette_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_recette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recette/edit.html.twig', [
            'recette' => $recette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_recette_delete', methods: ['POST'])]
    public function delete(Request $request, Recette $recette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recette->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($recette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_recette_index', [], Response::HTTP_SEE_OTHER);
    }

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

/////////////// afficher les recettes par saison //////////////

#[Route('/recettes/afficher/{saison}', name : 'RecetteParSaison')]
public function afficherRecetteParSaison(RecetteRepository $recette, $saison , SerializerInterface $serializer) : Response
{
    if($saison){
    $recettes = $recette->rechercheRecetteFiltresSaison(['saison' => $saison]);

    $recettesJson = $serializer->serialize($recettes,'json', [AbstractNormalizer::ATTRIBUTES => ['id','titre', 'image','utilisateur' => ['nom']]]);

    return new Response($recettesJson, 200, [], true);
    }

    $vars = ['saisons' => Saison::cases()];

    return $this->render('recette/index.html.twig', $vars);
}
 

/////////////// afficher les recettes par typeDePlat //////////////

#[Route('/recettes/afficher/{typeDePlat}', name : 'RecetteParTypeDePlat')]
public function afficherRecetteParTypeDePlat(RecetteRepository $recette, $typeDePlat , SerializerInterface $serializer) : Response
{
   
  if ($typeDePlat){
    $recettes = $recette->rechercheRecetteFiltresTypeDePlat(['typeDePlat' => $typeDePlat]);
    $recettesJson = $serializer->serialize($recettes,'json', [AbstractNormalizer::ATTRIBUTES => ['id','titre', 'image','utilisateur' => ['nom']]]); 

    return new Response($recettesJson, 200, [], true);
  }

  $vars = ['typeDePlats' => TypeDePlat::cases()];

  return $this->render('recette/index.html.twig', $vars);
}
   
}
