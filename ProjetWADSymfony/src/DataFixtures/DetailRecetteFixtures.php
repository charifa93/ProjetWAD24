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
       

        $unitesMesure = ['g', 'kg', 'ml', 'cl', 'l', 'pincée', 'cuillère à café', 'cuillère à soupe', 'tranche', 'pièce'];

        for ($i = 0; $i < 50; $i++) {
            $detailRecette = new DetailRecette([
                'quantite' => rand(1, 500),
                'uniteMesure' => $unitesMesure[array_rand($unitesMesure)],
                'recette' => $this->getReference('recette' . rand(0, 9)),
                'ingredient' => $this->getReference('ingredient' . rand(0, 49)),
            ]);
        
            $manager->persist($detailRecette);
        }
         
        
        $manager->flush();
    }
    public function getDependencies(){
     
        return ([RecetteFixtures::class, IngredientFixtures::class]);
              
    }
}

