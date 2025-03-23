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

    // //////// afficher les recettes plus recentes //////////////
    public function afficherRecettesRecentes(){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT R FROM App\Entity\Recette R ORDER BY R.dateCreation DESC');
        $recettes = $query->getResult();
        return $recettes ;
        }

    ////// afficher 6 recettes bien noter la note dans une table note  ////////////////
    public function afficherRecettesBienNoter(){
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT r.*, AVG(n.valeur) AS moyenne_note
                                        FROM recette r
                                        JOIN note n ON r.id = n.recetteId
                                        GROUP BY r.id
                                        ORDER BY moyenne_note DESC
                                        LIMIT 6;
                                        ');
        $recettes = $query->getResult();
        return $recettes ;
        }






 

    
}
