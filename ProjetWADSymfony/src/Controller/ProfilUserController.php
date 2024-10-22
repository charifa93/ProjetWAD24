<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProfilUserController extends AbstractController
{
    public ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/profil', name: 'afficherUser')]
    public function afficherUser(): Response
    {
        $user = new Utilisateur();
        $user = $this->getUser();

        $vars = ['user' => $user];
        return $this->render('Utilisateur/profilUser.html.twig', $vars);
    }


    #[Route('/profil/modifier/{id}', name: 'modifierUser')]
    public function modifierUser( Utilisateur $user , Request $request ): Response
    {

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('afficherUser');
        }

        

        return $this->render('profil_user/modificationProfil.html.twig');
    }

    


}
