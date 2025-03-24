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
        for ($i = 0; $i < 50; $i++) {
            $detailCourses = new DetailCourses([
                'quantite' => rand(1, 10),
                'coursesList' => $this->getReference('coursesList' . rand(0, 9)),
                'ingredient' => $this->getReference('ingredient' . rand(0, 49)), // 50 ingrédients
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
