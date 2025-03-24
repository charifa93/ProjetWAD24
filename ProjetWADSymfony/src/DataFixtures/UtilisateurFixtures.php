<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {

        $utilisateursData = [
            [
                'prenom' => 'Alice',
                'nom' => 'Martin',
                'email' => 'alice.martin@gmail.com',
                'photo' => 'https://randomuser.me/api/portraits/women/10.jpg',
            ],
            [
                'prenom' => 'Julien',
                'nom' => 'Durand',
                'email' => 'julien.durand@gmail.com',
                'photo' => 'https://randomuser.me/api/portraits/men/11.jpg',
            ],
            [
                'prenom' => 'Sophie',
                'nom' => 'Lefevre',
                'email' => 'sophie.lefevre@gmail.com',
                'photo' => 'https://randomuser.me/api/portraits/women/12.jpg',
            ],
            [
                'prenom' => 'Lucas',
                'nom' => 'Bernard',
                'email' => 'lucas.bernard@gmail.com',
                'photo' => 'https://randomuser.me/api/portraits/men/13.jpg',
            ],
            [
                'prenom' => 'Emma',
                'nom' => 'Moreau',
                'email' => 'emma.moreau@gmail.com',
                'photo' => 'https://randomuser.me/api/portraits/women/14.jpg',
            ],
        ];
        
        foreach ($utilisateursData as $i => $data) {
            $user = new Utilisateur();
            $user->setEmail($data['email']);
            $user->setRoles(['ROLE_USER']);
            
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'lepassword');
            $user->setPassword($hashedPassword);
        
            $user->setPrenom($data['prenom']);
            $user->setNom($data['nom']);
            $user->setPhoto($data['photo']);
        
            $this->addReference('utilisateur' . $i, $user);
            $manager->persist($user);
        }
        

        $manager->flush();
    }
}
