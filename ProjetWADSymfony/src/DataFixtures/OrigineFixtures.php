<?php

namespace App\DataFixtures;

use App\Entity\Origine;
use App\Entity\Recette;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class OrigineFixtures extends Fixture 
{
    
}
    public function load(ObjectManager $manager): void
    {
    //    for ($i = 0; $i < 10; $i++) {
    //         $origine = new Origine([
    //             'nom' => 'origine'.$i ,
    //             'origineRecette' => $this->getReference('origineRecette'.$i)
    //         ]);

          $saisons = "ete, hiver, printemps, automne";
        for ($i = 0; $i < 4; $i++) {
            $origine = new Origine();
            $origine->setNom($saisons[$i]);
            $manager->persist($origine);
            
            $this->addReference('origine' . $i, $origine);
        }

        $manager->flush();
    }
          
          
          
    public function getDependencies(){
        return ([RecetteFixtures::class]);
              
    }
}

