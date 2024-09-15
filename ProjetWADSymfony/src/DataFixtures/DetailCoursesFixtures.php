<?php

namespace App\DataFixtures;

use App\Entity\DetailCourses;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DetailCoursesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $detailCourses = new DetailCourses([
                'quantite' => $faker->numberBetween(1, 10),

            ]);
            $manager->persist($detailCourses);
        }

        $manager->flush();
    }
}
