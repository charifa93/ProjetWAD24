<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\Preparations;
use App\Enum\TypeDePlat;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Etape;

class RecetteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
{
    $recettesData = [
        [
            'titre' => 'Quiche Lorraine',
            'description' => 'Une délicieuse quiche aux lardons et fromage, parfaite pour le dîner.',
            'difficulte' => 'Facile',
            'image' => 'https://images.pexels.com/photos/671956/pexels-photo-671956.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-03-01'),
            'tempsDePreparation' => new \DateTime('00:20:00'),
            'tempsDeCuison' => new \DateTime('00:35:00'),
            'nombrePortions' => 6,
        ],
        [
            'titre' => 'Boeuf Bourguignon',
            'description' => 'Un plat traditionnel mijoté de bœuf au vin rouge avec légumes.',
            'difficulte' => 'Difficile',
            'image' => 'https://images.pexels.com/photos/2313686/pexels-photo-2313686.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-02-15'),
            'tempsDePreparation' => new \DateTime('00:30:00'),
            'tempsDeCuison' => new \DateTime('03:00:00'),
            'nombrePortions' => 4,
        ],
        [
            'titre' => 'Ratatouille',
            'description' => 'Un mélange savoureux de légumes provençaux cuits au four.',
            'difficulte' => 'Moyen',
            'image' => 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-01-10'),
            'tempsDePreparation' => new \DateTime('00:25:00'),
            'tempsDeCuison' => new \DateTime('00:40:00'),
            'nombrePortions' => 4,
        ],
        [
            'titre' => 'Tarte Tatin',
            'description' => 'Une tarte renversée aux pommes caramélisées, un dessert classique.',
            'difficulte' => 'Moyen',
            'image' => 'https://images.pexels.com/photos/6062025/pexels-photo-6062025.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2023-12-05'),
            'tempsDePreparation' => new \DateTime('00:20:00'),
            'tempsDeCuison' => new \DateTime('00:35:00'),
            'nombrePortions' => 6,
        ],
        [
            'titre' => 'Poulet Basquaise',
            'description' => 'Poulet mijoté avec poivrons, tomates et oignons façon basque.',
            'difficulte' => 'Moyen',
            'image' => 'https://images.pexels.com/photos/616404/pexels-photo-616404.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2023-11-18'),
            'tempsDePreparation' => new \DateTime('00:15:00'),
            'tempsDeCuison' => new \DateTime('01:00:00'),
            'nombrePortions' => 4,
        ],
        [
            'titre' => 'Soupe à l’oignon',
            'description' => 'Une soupe traditionnelle gratinée à base d’oignons caramélisés.',
            'difficulte' => 'Facile',
            'image' => 'https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-01-25'),
            'tempsDePreparation' => new \DateTime('00:15:00'),
            'tempsDeCuison' => new \DateTime('00:40:00'),
            'nombrePortions' => 4,
        ],
        [
            'titre' => 'Salade Niçoise',
            'description' => 'Salade fraîche avec thon, œufs, olives et légumes.',
            'difficulte' => 'Facile',
            'image' => 'https://images.pexels.com/photos/1640773/pexels-photo-1640773.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-02-10'),
            'tempsDePreparation' => new \DateTime('00:15:00'),
            'tempsDeCuison' => new \DateTime('00:00:00'),
            'nombrePortions' => 2,
        ],
        [
            'titre' => 'Crêpes Suzette',
            'description' => 'Crêpes flambées à la liqueur d’orange, servies en dessert.',
            'difficulte' => 'Moyen',
            'image' => 'https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-03-05'),
            'tempsDePreparation' => new \DateTime('00:20:00'),
            'tempsDeCuison' => new \DateTime('00:10:00'),
            'nombrePortions' => 4,
        ],
        [
            'titre' => 'Cassoulet',
            'description' => 'Un plat mijoté à base de haricots blancs, saucisses et confit de canard.',
            'difficulte' => 'Difficile',
            'image' => 'https://images.pexels.com/photos/1087896/pexels-photo-1087896.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2023-10-30'),
            'tempsDePreparation' => new \DateTime('00:45:00'),
            'tempsDeCuison' => new \DateTime('03:30:00'),
            'nombrePortions' => 6,
        ],
        [
            'titre' => 'Gratin Dauphinois',
            'description' => 'Pommes de terre au four avec crème et fromage gratiné.',
            'difficulte' => 'Facile',
            'image' => 'https://images.pexels.com/photos/4495760/pexels-photo-4495760.jpeg?auto=compress&cs=tinysrgb&w=800',
            'datePublication' => new \DateTime('2024-02-20'),
            'tempsDePreparation' => new \DateTime('00:20:00'),
            'tempsDeCuison' => new \DateTime('01:00:00'),
            'nombrePortions' => 4,
        ],
         
    ];

    foreach ($recettesData as $i => $data) {
        $recette = new Recette();
        $recette->setTitre($data['titre']);
        $recette->setDescription($data['description']);
        $recette->setDifficulte($data['difficulte']);
        $recette->setImage($data['image']);
        $recette->setDatePublication($data['datePublication']);
        $recette->setTempsDePreparation($data['tempsDePreparation']);
        $recette->setTempsDeCuison($data['tempsDeCuison']);
        $recette->setNombrePortions($data['nombrePortions']);

        $recette->setUtilisateur($this->getReference('utilisateur' . rand(0, 4)));

        $recette->setSaison(Saison::cases()[rand(0, 4)]);
        $recette->setTypeDePlat(TypeDePlat::cases()[rand(0, 7)]);
        $recette->setOrigine(Origine::cases()[rand(0, 8)]);
        $recette->setPreparations(Preparations::cases()[rand(0, 16)]);

        $this->addReference('recette' . $i, $recette);

        $manager->persist($recette);
    }

    $manager->flush();
    $etapesData = [
        [
            'titre' => 'Préparation des ingrédients',
            'description' => 'Préparez tous les ingrédients nécessaires, épluchez et découpez si besoin.'
        ],
        [
            'titre' => 'Cuisson ou Préparation principale',
            'description' => 'Faites cuire ou mélangez les ingrédients selon les instructions de la recette.'
        ],
        [
            'titre' => 'Assemblage',
            'description' => 'Assemblez les différents composants pour former le plat final.'
        ],
        [
            'titre' => 'Finition et Service',
            'description' => 'Ajoutez la touche finale et servez le plat chaud ou froid selon la recette.'
        ],
    ];

    foreach ($etapesData as $index => $etapeInfo) {
        $etape = new Etape();
        $etape->setOrdre($index + 1);
        $etape->setTitre($etapeInfo['titre']);
        $etape->setDescription($etapeInfo['description']);
        $etape->setRecette($recette);
        $manager->persist($etape);
    }


$manager->flush();
}

    public function getDependencies(){
        return ([UtilisateurFixtures::class,
                IngredientFixtures::class,
                
            ]);
              
    }
}
