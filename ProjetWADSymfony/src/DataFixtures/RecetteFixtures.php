<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Recette;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RecetteFixtures extends Fixture
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
           ]);
           
           $manager->persist($recette);
       }
       $manager->flush();
    }
}
