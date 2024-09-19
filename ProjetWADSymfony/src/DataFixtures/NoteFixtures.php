<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Note;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class NoteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $note = new Note();
            $note->setValeur($faker->numberBetween(1, 5));

            $manager->persist($note);
            $this->addReference('note' . $i, $note);

            $note->setUtilisateur($this->getReference('utilisateur' . rand(0, 4)));
            $note->setRecettes($this->getReference('recette' . rand(0, 9)));
            
        }


        $manager->flush();
    }
    public function getDependencies()
    {
        return ([
            UtilisateurFixtures::class,
            RecetteFixtures::class
        ]);
    }
}
