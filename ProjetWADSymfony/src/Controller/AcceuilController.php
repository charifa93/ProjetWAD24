<?php

namespace App\Controller;
use App\Enum\Saison;
use App\Enum\Origine;
use App\Enum\TypeDePlat;
use App\Enum\Preparations;
use App\Form\RechercheRecetteType;
use App\Repository\RecetteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    
    class AcceuilController extends AbstractController
    {
        /////////////////////////les recettes plus recentes et les recettes bien  //////////////
        #[Route('/', name: 'accueil')]
        public function index(Request $req, RecetteRepository $rep): Response
        {
            $form = $this->createForm(RechercheRecetteType::class);
            $recetteDifficile = $rep->findBy(['difficulte' => 'Facile'], ['datePublication' => 'DESC'], 4 );
            $recettes = $rep->findBy([], ['datePublication' => 'DESC'], 6);
            $recetteRapide = $rep->findBy([], ['tempsDePreparation' => 'DESC'], 4 );
            
    
            return $this->render('acceuil/index.html.twig', [
                'form' => $form->createView(),
                'recettes' => $recettes, 
                'recetteDifficile' => $recetteDifficile,
                'recetteRapide' => $recetteRapide
            ]);
        }
    
        #[Route('/recherche-recettes', name: 'recherche_recettes', methods: ['POST'])]
        public function rechercherRecettes(Request $req, RecetteRepository $rep): Response
        {
            $form = $this->createForm(RechercheRecetteType::class);
            $form->handleRequest($req);

            // Initialiser $recettesRecentes toujours avant de passer à la vue
            $recettesRecentes = $rep->afficherRecettesBienNoter();

            if ($form->isSubmitted() && $form->isValid()) {
                // Si le formulaire est valide, filtrez les recettes en fonction des données du formulaire
                $recettes = $rep->rechercheRecetteFiltres($form->getData());
            } else {
                // Si le formulaire est invalide, retournez toutes les recettes
                $recettes = $rep->findAll();
            }

            return $this->render('acceuil/_recettes.html.twig', [
                'recettes' => $recettes,
                'recettesRecentes' => $recettesRecentes // Assurez-vous que cette variable est bien passée ici
            ]);
        }

        


    }
