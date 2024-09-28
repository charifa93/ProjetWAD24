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

    public function recherche(array $filtre){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R WHERE R.titre LIKE UPPER (:titre)' );
        $query ->setParameter("titre" , "%". mb_strtoupper($filtre['titre']). "%");
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
