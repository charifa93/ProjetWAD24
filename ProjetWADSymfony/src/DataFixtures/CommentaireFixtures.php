<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Commentaire;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentaireFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $commentaire = new Commentaire([
                'contenu' => $faker->text(),
                'dateCommentaire' => $faker->dateTime(),
                'utilisateur' => $this->getReference('utilisateur' . rand(0, 4)), // attention!! nombre users
                'recette' => $this->getReference('recette' . rand(0, 9)),
            ]);
            // dd($commentaire);

            $this->addReference('commentaire' . $i, $commentaire);


            $manager->persist($commentaire);
        }



        $manager->flush();
    }

    public function getDependencies()
    {
        return ([UtilisateurFixtures::class,
                RecetteFixtures::class]);
    }
}
