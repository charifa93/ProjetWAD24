<?php

namespace App\Controller;

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
    #[Route('/', name: 'accueil')]
    public function index(Request $req, SerializerInterface $serializer, RecetteRepository $rep): Response
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

        return $this->render('acceuil/index.html.twig', $vars);

    }
}
