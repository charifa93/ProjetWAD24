<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Recette;
use App\Enum\Saison;
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
            'difficulte' => $faker->numberBetween(1,5),
            'image' => $faker->imageUrl(640, 480, 'food', true),
            'datePublication' => $faker->dateTimeBetween('-1 year', 'now'),
            'tempsDePreparation' => new \DateTime($faker->time()),
            'tempsDeCuison' => new \DateTime($faker->time()),
            'nombrePortions' => $faker->numberBetween(1, 10),
            'utilisateur' => $this->getReference('utilisateur'.rand(0,4)), // attention!! nombre users
            'ingredient' => $this->getReference('ingredient'.rand(0,9)),

            
           ]);
            //  pour ajouter des origines et remplir la table de relation 
           $recette->addOrigine($this->getReference('origine'.rand(0,4)));
           $recette->addOrigine($this->getReference('origine'.rand(5,9)));

        //    enum saison/////
           $recette->setSaison(Saison::cases()[rand(0,4)]);


           $this->addReference('recette' . $i, $recette);

           $manager->persist($recette);
       }
       $manager->flush();
    }

    public function getDependencies(){
        return ([UtilisateurFixtures::class,
                IngredientFixtures::class,
                OrigineFixtures::class
            ]);
              
    }
}
