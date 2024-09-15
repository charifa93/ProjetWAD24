<?php

namespace App\Entity;

use App\Repository\DetailCoursesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailCoursesRepository::class)]
class DetailCourses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;

    #[ORM\ManyToOne(inversedBy: 'detailsCourses')]
    private ?CoursesList $coursesList = null;

    #[ORM\ManyToOne(inversedBy: 'DetailsCouresIng')]
    private ?Ingredient $ingredient = null;

    // hydrate
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getCoursesList(): ?CoursesList
    {
        return $this->coursesList;
    }

    public function setCoursesList(?CoursesList $coursesList): static
    {
        $this->coursesList = $coursesList;

        return $this;
    }

    public function getIngredient(): ?Ingredient
    {
        return $this->ingredient;
    }

    public function setIngredient(?Ingredient $ingredient): static
    {
        $this->ingredient = $ingredient;

        return $this;
    }
}
