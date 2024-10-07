<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Origine;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class OrigineFixtures extends Fixture 
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $origine = new Origine([
                'nom' => $faker->word()
            ]);
            $manager->persist($origine);
            $this->addReference('origine' . $i, $origine);
        }
        $manager->flush();
    }
}

