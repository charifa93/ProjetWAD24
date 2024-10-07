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

    public function rechercheRecetteFiltresSaison(array $filtres){
        $em = $this->getEntityManager();
        // $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERER.saison LIKE UPPER (:saison)' );
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.saison = :saison');
        $query ->setParameter("saison" , $filtres['saison']);
        $Recettes = $query->getResult();
        return $Recettes ;
        
    }
    public function rechercheRecetteFiltresTypeDePlat(array $filtres){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.typeDePlat = :typeDePlat');
        $query ->setParameter("typeDePlat" , $filtres['typeDePlat']);
        $Recettes = $query->getResult();
        return $Recettes ; 
    }
    public function rechercheRecetteFiltresOrigine(array $filtres){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.origine LIKE UPPER (:origine)' );
        $query ->setParameter("origine" , $filtres['origine']);
        $Recettes = $query->getResult();
        return $Recettes ;
        
    }

    
    public function supprimer($id){

        $em = $this->getEntityManager();
        $query = $em->createQuery('DELETE FROM App\Entity\Recette R WHERE R.id = :id' );
        $query ->setParameter("id" , $id);
        $Recettes = $query->getResult();
        return $Recettes ;
    }


    //    /**
    //     * @return Recette[] Returns an array of Recette objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Recette
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
