<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Note;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class NoteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $note = new Note();
            $note->setValeur($faker->numberBetween(1, 5));

            $manager->persist($note);
        }
        

        $manager->flush();
    }
}
