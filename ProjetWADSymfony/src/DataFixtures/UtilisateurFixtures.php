<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
        $faker = Factory::create('fr_FR');


         for ($i = 0; $i < 10; $i++) {
            $utilisateur = new Utilisateur();
            
            $utilisateur->setNom($faker->userName);
            $utilisateur->setEmail($faker->email);
            $utilisateur->setPassword($faker->password);

            $manager->persist($utilisateur);
        }
        $manager->flush();
    }
}
