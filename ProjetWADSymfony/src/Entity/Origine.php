<?php

namespace App\Entity;

use App\Repository\OrigineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrigineRepository::class)]
class Origine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Recette>
     */
    #[ORM\ManyToMany(targetEntity: Recette::class, inversedBy: 'origines')]
    private Collection $OrigineRecette;
    
    // hydrate ////
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
    public function __construct(array $init = [])
    {
        $this->hydrate($init);
        $this->OrigineRecette = new ArrayCollection();
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

    /**
     * @return Collection<int, Recette>
     */
    public function getOrigineRecette(): Collection
    {
        return $this->OrigineRecette;
    }

    public function addOrigineRecette(Recette $origineRecette): static
    {
        if (!$this->OrigineRecette->contains($origineRecette)) {
            $this->OrigineRecette->add($origineRecette);
        }

        return $this;
    }

    public function removeOrigineRecette(Recette $origineRecette): static
    {
        $this->OrigineRecette->removeElement($origineRecette);

        return $this;
    }
}
