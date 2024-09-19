<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\DetailRecette;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DetailRecetteFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($i = 0; $i < 10; $i++) {
            $detailRecette = new DetailRecette([
                'quantite' => $faker->numberBetween(1, 10),
                'uniteMesure' => $faker->word(),
                'recette' => $this->getReference('recette' . rand(0, 9)),
                'ingredient' => $this->getReference('ingredient' . rand(0, 9)),
            ]);

            $manager->persist($detailRecette);
        }

        
        
        $manager->flush();
    }
    public function getDependencies(){
     
        return ([RecetteFixtures::class, IngredientFixtures::class]);
              
    }
}

