<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\CoursesList;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CoursesListFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        
        for ($i = 0; $i < 10; $i++) {
            $coursesList = new CoursesList([
                'nom' => $faker->sentence(3)     
            ]);

            $coursesList->setUtilisateur($this->getReference('utilisateur'.rand(0,4)));
            $this->addReference('coursesList' . $i, $coursesList);
            $manager->persist($coursesList);
        }

        

        $manager->flush();
    }
    public function getDependencies(){
        return ([UtilisateurFixtures::class]);
    }
}
