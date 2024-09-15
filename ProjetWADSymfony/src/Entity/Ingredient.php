<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;

    /**
     * @var Collection<int, DetailCourses>
     */
    #[ORM\OneToMany(targetEntity: DetailCourses::class, mappedBy: 'ingredient')]
    private Collection $DetailsCouresIng;

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
          $this->DetailsCouresIng = new ArrayCollection();
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection<int, DetailCourses>
     */
    public function getDetailsCouresIng(): Collection
    {
        return $this->DetailsCouresIng;
    }

    public function addDetailsCouresIng(DetailCourses $detailsCouresIng): static
    {
        if (!$this->DetailsCouresIng->contains($detailsCouresIng)) {
            $this->DetailsCouresIng->add($detailsCouresIng);
            $detailsCouresIng->setIngredient($this);
        }

        return $this;
    }

    public function removeDetailsCouresIng(DetailCourses $detailsCouresIng): static
    {
        if ($this->DetailsCouresIng->removeElement($detailsCouresIng)) {
            // set the owning side to null (unless already changed)
            if ($detailsCouresIng->getIngredient() === $this) {
                $detailsCouresIng->setIngredient(null);
            }
        }

        return $this;
    }
}
