<?php

namespace App\Entity;

use App\Repository\CoursesListRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursesListRepository::class)]
class CoursesList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;
    

    //  hydrate 
      public function hydrate(array $init)
      {
          foreach ($init as $propriete => $valeur) {
              $nomSet = "set" . ucfirst($propriete);
              if (!method_exists($this, $nomSet)) {
                  // à nous de voir selon le niveau de restriction...
                  // throw new Exception("La méthode {$nomSet} n'existe pas");
              } else {
                  // appel au set
                  $this->$nomSet($valeur);
              }
          }
      }
      // constructeur
      public function __construct(array $init = [])
      {
          $this->hydrate($init);
      }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }
}
