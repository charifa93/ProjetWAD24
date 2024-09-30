<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tempsDePreparation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tempsDeCuison = null;

    #[ORM\Column(nullable: true)]
    private ?int $difficulte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'recettes')]
    private ?Utilisateur $utilisateur = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'recette')]
    private Collection $recetteCom;

    /**
     * @var Collection<int, Note>
     */
    #[ORM\OneToMany(targetEntity: Note::class, mappedBy: 'recette')]
    private Collection $recettesNote;

    #[ORM\Column(nullable: true)]
    private ?int $nombrePortions = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $saison = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origine = null;

    /**
     * @var Collection<int, DetailRecette>
     */
    #[ORM\OneToMany(targetEntity: DetailRecette::class, mappedBy: 'recette', orphanRemoval: true)]
    private Collection $detailRecette;
 

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
      // constructeur
      public function __construct(array $init = [])
      {
          $this->hydrate($init);
          $this->recetteCom = new ArrayCollection();
          $this->recettesNote = new ArrayCollection();
          $this->detailRecette = new ArrayCollection();
      }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(?\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getTempsDePreparation(): ?\DateTimeInterface
    {
        return $this->tempsDePreparation;
    }

    public function setTempsDePreparation(?\DateTimeInterface $tempsDePreparation): static
    {
        $this->tempsDePreparation = $tempsDePreparation;

        return $this;
    }

    public function getTempsDeCuison(): ?\DateTimeInterface
    {
        return $this->tempsDeCuison;
    }

    public function setTempsDeCuison(?\DateTimeInterface $tempsDeCuison): static
    {
        $this->tempsDeCuison = $tempsDeCuison;

        return $this;
    }

    public function getDifficulte(): ?int
    {
        return $this->difficulte;
    }

    public function setDifficulte(?int $difficulte): static
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getRecetteCom(): Collection
    {
        return $this->recetteCom;
    }

    public function addRecetteCom(Commentaire $recetteCom): static
    {
        if (!$this->recetteCom->contains($recetteCom)) {
            $this->recetteCom->add($recetteCom);
            $recetteCom->setRecette($this);
        }

        return $this;
    }

    public function removeRecetteCom(Commentaire $recetteCom): static
    {
        if ($this->recetteCom->removeElement($recetteCom)) {
            // set the owning side to null (unless already changed)
            if ($recetteCom->getRecette() === $this) {
                $recetteCom->setRecette(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Note>
     */
    public function getRecettesNote(): Collection
    {
        return $this->recettesNote;
    }

    public function addRecettesNote(Note $recettesNote): static
    {
        if (!$this->recettesNote->contains($recettesNote)) {
            $this->recettesNote->add($recettesNote);
            $recettesNote->setRecette($this);
        }

        return $this;
    }

    public function removeRecettesNote(Note $recettesNote): static
    {
        if ($this->recettesNote->removeElement($recettesNote)) {
            // set the owning side to null (unless already changed)
            if ($recettesNote->getRecette() === $this) {
                $recettesNote->setRecette(null);
            }
        }

        return $this;
    }

    public function getNombrePortions(): ?int
    {
        return $this->nombrePortions;
    }

    public function setNombrePortions(?int $nombrePortions): static
    {
        $this->nombrePortions = $nombrePortions;

        return $this;
    }

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(?string $saison): static
    {
        $this->saison = $saison;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(?string $origine): static
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * @return Collection<int, DetailRecette>
     */
    public function getDetailRecette(): Collection
    {
        return $this->detailRecette;
    }

    public function addDetailRecette(DetailRecette $detailRecette): static
    {
        if (!$this->detailRecette->contains($detailRecette)) {
            $this->detailRecette->add($detailRecette);
            $detailRecette->setRecette($this);
        }

        return $this;
    }

    public function removeDetailRecette(DetailRecette $detailRecette): static
    {
        if ($this->detailRecette->removeElement($detailRecette)) {
            // set the owning side to null (unless already changed)
            if ($detailRecette->getRecette() === $this) {
                $detailRecette->setRecette(null);
            }
        }

        return $this;
    }
}
