<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\DetailCourses;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DetailCoursesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
       $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $detailCourses = new DetailCourses([
                'quantite' => $faker->numberBetween(1, 10),
                'coursesList' => $this->getReference('coursesList' . rand(0, 9)),
                'ingredient' => $this->getReference('ingredient' . rand(0, 9)),
            ]);




            $manager->persist($detailCourses);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CoursesListFixtures::class,
            IngredientFixtures::class,
        ];
    }
}
