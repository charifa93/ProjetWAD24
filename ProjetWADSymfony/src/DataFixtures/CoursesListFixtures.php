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
       
        $nomListes = [
            'Courses semaine',
            'Courses pour dîner',
            'Liste barbecue',
            'Courses rapide',
            'Courses végétariennes',
            'Courses pâtisserie',
            'Courses déjeuner famille',
            'Courses week-end',
            'Courses pique-nique',
            'Courses pour apéro',
        ];
        
        for ($i = 0; $i < 10; $i++) {
            $coursesList = new CoursesList([
                'nom' => $nomListes[$i]
            ]);
        
            $coursesList->setUtilisateur($this->getReference('utilisateur' . rand(0, 4)));
            $this->addReference('coursesList' . $i, $coursesList);
            $manager->persist($coursesList);
        }
        

        $manager->flush();
    }
    public function getDependencies(){
        return ([UtilisateurFixtures::class]);
    }
}
