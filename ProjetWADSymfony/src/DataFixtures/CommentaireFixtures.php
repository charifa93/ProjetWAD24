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
        $commentairesData = [
            'Recette super facile à faire, un vrai régal !',
            'Toute la famille a adoré, je referai sans hésiter.',
            'La cuisson était parfaite, merci pour la recette !',
            'Un peu trop salé à mon goût, mais très bon quand même.',
            'Recette rapide et efficace, top pour les soirs de semaine.',
            'J’ai remplacé la crème par du lait, c’était délicieux.',
            'Un classique revisité, j’ai adoré !',
            'Temps de cuisson un peu court, j’ai laissé 10 min de plus.',
            'Très bon, mais je rajouterai plus d’épices la prochaine fois.',
            'Excellent, je recommande vivement cette recette à tous !',
            'Recette super facile à faire, un vrai régal !',
            'Toute la famille a adoré, je referai sans hésiter.',
            'La cuisson était parfaite, merci pour la recette !',
            'Un peu trop salé à mon goût, mais très bon quand même.',
            'Recette rapide et efficace, top pour les soirs de semaine.',
            'J’ai remplacé la crème par du lait, c’était délicieux.',
            'Un classique revisité, j’ai adoré !',
            'Temps de cuisson un peu court, j’ai laissé 10 min de plus.',
            'Très bon, mais je rajouterai plus d’épices la prochaine fois.',
            'Excellent, je recommande vivement cette recette à tous !',
            'Recette simple mais super savoureuse.',
            'J’ai testé pour un dîner entre amis, carton plein❤️❤️  !',
            'Un peu déçu, je m’attendais à plus de goût.',
            'Idéal pour les débutants, super bien expliqué.',
            'La texture était parfaite, bien moelleuse.',
            'Avec une petite salade, c’était top !',
            'Mes enfants ont adoré, surtout les légumes.',
            'Je l’ai fait deux fois déjà, un must-have.',
            'Temps de préparation rapide, nickel pour le midi.',
            'Je recommande cette recette à 100 %, merci !',
        ];
        
        for ($i = 0; $i < 30; $i++) {
            $commentaire = new Commentaire([
                'contenu' => $commentairesData[$i],
                'dateCommentaire' => new \DateTimeImmutable(sprintf('-%d days', rand(1, 365))),
                'utilisateur' => $this->getReference('utilisateur' . rand(0, 4)),
                'recette' => $this->getReference('recette' . rand(0, 9)),
            ]);
        
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
