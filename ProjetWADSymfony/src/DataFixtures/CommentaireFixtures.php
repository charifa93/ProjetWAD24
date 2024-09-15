<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Commentaire;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CommentaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $commentaire = new Commentaire([
                'contenu' => $faker->text(),
                'dateCommentaire' => $faker->dateTime(),
                'utilisateur' => $this->getReference('utilisateur'.$i),
            ]);
           

            $manager->persist($commentaire);
        }

            

        $manager->flush();
    }
}
