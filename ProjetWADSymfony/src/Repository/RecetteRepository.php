<?php

namespace App\Repository;

use App\Entity\Recette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recette>
 */
class RecetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recette::class);
    }

    public function rechercheRecetteFiltres(array $filtres){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.titre LIKE UPPER (:titre)' );
        $query ->setParameter("titre" , "%". mb_strtoupper($filtres['titre']). "%");
        $Recettes = $query->getResult();
        return $Recettes ;
    }

    public function rechercheRecetteCategorie(string $typeRecherche, string $valeur){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.'. $typeRecherche. '=:valeur');
        $query ->setParameter("valeur" , $valeur);
        $recettes = $query->getResult();
        // dump($typeRecherche);
        // dump($query->getDQL());
        // dd($recettes);
        return $recettes ;
        
    }

 

    
}
