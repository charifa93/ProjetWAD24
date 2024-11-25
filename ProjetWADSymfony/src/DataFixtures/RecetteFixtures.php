<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\Preparations;
use App\Enum\TypeDePlat;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RecetteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');


        for ($i = 0; $i < 10; $i++) {
           $recette = new Recette([
            'titre' => $faker->sentence(3),
            'description' => $faker->text(100),
            'difficulte' => $faker->randomElement(['Facile', 'Moyen', 'Difficile']),
            'image' => $faker->imageUrl(50 , 50, 'recettes', true),
            'datePublication' => $faker->dateTimeBetween('-1 year', 'now'),
            'tempsDePreparation' => new \DateTime($faker->time()),
            'tempsDeCuison' => new \DateTime($faker->time()),
            'nombrePortions' => $faker->numberBetween(1, 10),
            'utilisateur' => $this->getReference('utilisateur'.rand(0,4)), // attention!! nombre users
            'ingredient' => $this->getReference('ingredient'.rand(0,9)),

            
           ]);

        //////////////// enum ////////////////
           $recette->setSaison(Saison::cases()[rand(0,4)]);
           $recette->setTypeDePlat(TypeDePlat::cases()[rand(0,7)]);
           $recette->setOrigine(Origine::cases()[rand(0,8)]);
           $recette->setPreparations(Preparations::cases()[rand(0,16)]);


           $this->addReference('recette' . $i, $recette);

           $manager->persist($recette);
       }
       $manager->flush();
    }

    public function getDependencies(){
        return ([UtilisateurFixtures::class,
                IngredientFixtures::class,
            ]);
              
    }
}
