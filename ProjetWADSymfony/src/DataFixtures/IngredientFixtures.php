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
       
            
        $ingredientsData = [
            'Tomate', 'Oignon', 'Ail', 'Pomme de terre', 'Carotte', 'Poivron rouge', 'Courgette', 'Aubergine', 'Champignon',
            'Laitue', 'Épinard', 'Brocoli', 'Petit pois', 'Haricot vert', 'Maïs', 'Radis', 'Concombre', 'Chou-fleur',
            'Chou', 'Navet', 'Poireau', 'Betterave', 'Avocat', 'Citron', 'Orange', 'Pomme', 'Poire', 'Fraise', 'Banane',
            'Poulet', 'Bœuf', 'Porc', 'Saumon', 'Thon', 'Œuf', 'Lait', 'Crème fraîche', 'Beurre', 'Fromage râpé',
            'Parmesan', 'Mozzarella', 'Farine', 'Sucre', 'Sel', 'Poivre', 'Thym', 'Romarin', 'Persil', 'Basilic', 'Huile d’olive'
        ];
        
        foreach ($ingredientsData as $i => $nomIngredient) {
            $ingredient = new Ingredient();
            $ingredient->setNom($nomIngredient);
        
            $this->addReference('ingredient' . $i, $ingredient);
            $manager->persist($ingredient);
        }
        

        $manager->flush();
    }
}
