<?php

namespace App\Controller;

use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\TypeDePlat;
use App\Enum\Preparations;
use App\Form\RechercheRecetteType;
use App\Form\AjouterRecetteFormType;
use App\Repository\OrigineRepository;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionRecettesController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    // //////// afficher toutes les recettes //////////
    #[Route('/gestion/recettes/afficherttRecettes', name: 'afficher')]
    public function selectAll(RecetteRepository $recettes)
    {
        $ALLRecettes = $recettes->findAll();

        $vars = [
            'recettes' => $ALLRecettes,
            'saisons' => Saison::cases(),
            'typeDePlats' => TypeDePlat::cases(),
            'origines' => Origine::cases(),
            'preparations' => Preparations::cases(),
        ];

        return $this->render('gestion_recettes/afficher_recettes.html.twig', $vars);
    }

    ////////// ajouter une nouvelle recette //////////
    #[Route('/gestion/recettes/ajouter', name: 'ajouter')]
    public function ajouter(Request $req)
    {
        $recette = new Recette();
        $form = $this->createForm(
            AjouterRecetteFormType::class,
            $recette,
            array('action' => $this->generateUrl('ajouter'), 'method' => 'POST')
        );
        $form->handleRequest($req);

        $recette->setUtilisateur($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('afficher');
        }
        return $this->render('gestion_recettes/ajouterRecette.html.twig', [
            'form' => $form->createView()
        ]);
    }

    ////////// modifier unerecette //////////
    #[Route('/gestion/recettes/modifier/{id}', name: 'modifierRecette')]
    public function modifier(Recette $recette, Request $req)
    {
        $form = $this->createForm(AjouterRecetteFormType::class, $recette);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('afficher');
        }

        return $this->render('gestion_recettes/modifierRecette.html.twig', [
            'form' => $form->createView()
        ]);
    }

    ////////// affichage du form pour rechercher une recette //////////
    #[Route('/gestion/recettes/recherche/form', name: 'rechercherParTitre')]
    public function rechercheForm(Request $req)
    {
        $form = $this->createForm(RechercheRecetteType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('rechercheParTitreResultat', ['filtre' => json_encode($form->getData())]);
        }

        $vars = ['form' => $form];
        return $this->render('gestion_recettes/recherche_form.html.twig', $vars);
    }

    //     ////////// rechercher une recette et l'afficher sans ajax //////////

    //     #[Route('/gestion/recettes/recherche/resultats', name : 'rechercheParTitreResultat')]
    //     public function rechercheResultat(Request $req, RecetteRepository $rep){
    //         // dd($req->get('filtre'));
    //         $filtreArray = json_decode($req->get('filtre'), true);
    //         $recettes = $rep->recherche($filtreArray);

    //         $vars = ['recettes'=>$recettes];
    //         return $this->render('gestion_recettes/afficher_recettes.html.twig',$vars);

    //     }

    // /////////////// afficher une recette sans ajax //////////////
    // #[Route('/gestion/recettes/afficher/{id}', name : 'afficherUneRecette')]
    // public function afficherUneRecette(RecetteRepository $recette, $id)
    // {
    //     $recette = $recette->find($id);

    //     if (!$recette) {
    //         throw $this->createNotFoundException('Recette non trouvée.');
    //     }

    //     $vars = ['recette' => $recette];

    //     return $this->render('gestion_recettes/afficher_une_recette.html.twig', $vars);
    // }


    /////////////// recherche avec ajax //////////////

    #[Route('/gestion/recettes/rechercheAjax', name: 'rechercheParTitreAjax')]
    public function rechercheAjax(Request $req, RecetteRepository $rep, SerializerInterface $serializer): Response
    {
        $form = $this->createForm(RechercheRecetteType::class);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {

            $recettes = $rep->rechercheRecetteFiltres($form->getData());  //($form->getData()) c un array 
            // dd($recettes);


            $recettesJson = $serializer->serialize($recettes, 'json', [AbstractNormalizer::ATTRIBUTES => ['id', 'titre', 'description', 'image', 'utilisateur' => ['nom']]]);

            return new Response($recettesJson);
        }
        $vars = ['form' => $form];

        return $this->render('gestion_recettes/recherche_form.html.twig', $vars);
    }

    #[Route('/gestion/recettes/rechercheAjax/resultats', name: 'rechercheParTitreResultatAjax')]
    public function rechercheResultatAjax()
    {
        return $this->render('gestion_recettes/afficher_recettes.html.twig');
    }

    /////////////// afficher les recettes par categorie //////////////
    #[Route('/gestion/recettes/afficher/{typeRecherche}/{valeur}', name: 'afficherRecetteRecherche')]
    public function afficherRecetteRecherche(RecetteRepository $rep, SerializerInterface $serializer, Request $req): Response
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

    /////////////// afficher les recettes les 4 dernières ajoutées //////////////
    #[Route('/gestion/recettes/afficher4Recettes', name: 'afficher4Recettes')]
    public function afficher4Recettes(RecetteRepository $rep, SerializerInterface $serializer): Response
    {
     $recettes = $rep->findBy([], ['id' => 'DESC'], 4, 0);
     $recettesJson = $serializer->serialize($recettes, 'json', [AbstractNormalizer::ATTRIBUTES => ['id', 'titre', 'image', 'utilisateur' => ['nom']]]);

     return new Response($recettesJson);
    }

   
}

  
