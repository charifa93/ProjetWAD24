<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Ingredient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class IngredientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $ingredient = new Ingredient([
                'nom' => $faker->word,
                
                
            ]);

            $this->addReference('ingredient' . $i, $ingredient);

            $manager->persist($ingredient);
        }
            
        

        $manager->flush();
    }
}
