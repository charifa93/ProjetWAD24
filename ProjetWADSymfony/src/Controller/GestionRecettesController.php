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


    ///////////// afficher les recettes par categorie //////////////
    // #[Route('/gestion/recettes/afficher/{typeRecherche}/{valeur}', name: 'afficherRecetteRecherche')]
    // public function RechercherParCategorie(RecetteRepository $rep, SerializerInterface $serializer, Request $req): Response
    // {

    //     $typeRecherche = $req->get('typeRecherche');
    //     $valeur = $req->get('valeur');

    //     // dump($valeur);
    //     // dd($typeRecherche);
        
    //     if (isset($typeRecherche) && isset($valeur)) {

    //         $recettes = $rep->rechercheRecetteCategorie ($typeRecherche, $valeur);

    //         $recettesJson = $serializer->serialize($recettes, 'json', [AbstractNormalizer::ATTRIBUTES => ['id', 'titre', 'image', 'utilisateur' => ['nom']]]);

    //         return new Response($recettesJson);
    //     }  
    // }
  
}

  
