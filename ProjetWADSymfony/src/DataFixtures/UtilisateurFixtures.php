<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {


        // $faker = Factory::create('fr_FR');


        //  for ($i = 0; $i < 10; $i++) {
        //     $utilisateur = new Utilisateur();

        //     $utilisateur->setNom($faker->userName);
        //     $utilisateur->setEmail($faker->email);
        //     $utilisateur->setPassword($faker->password);


        //     $manager->persist($utilisateur);

        for ($i = 0; $i < 5; $i++) {

            $user = new Utilisateur();
            $user->setEmail("user" . $i . "@gmail.com");
             $user->setRoles(['ROLE_USER']);

            // on crée un password hashé
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'lepassword');

            $user->setNom("nom" . $i);
<<<<<<< HEAD
            $user->setPrenom("preno" . $i);
=======
            $user->setPrenom("prenom" . $i); 
>>>>>>> 9b79c538b43b9913e43a7e25d6a853e073ca6b4d
            $user->setPassword($hashedPassword);

            // accesible
            $this->addReference('utilisateur' . $i, $user);


            $manager->persist($user);
        }

        $manager->flush();
    }
}
