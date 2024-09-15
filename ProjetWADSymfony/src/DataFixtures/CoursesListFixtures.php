<?php

namespace App\DataFixtures;

use App\Entity\CoursesList;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CoursesListFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        
        for ($i = 0; $i < 10; $i++) {
            $coursesList = new CoursesList([
                'nom' => $faker->sentence(3)     
            ]);

            $manager->persist($coursesList);
        }

        

        $manager->flush();
    }
}
