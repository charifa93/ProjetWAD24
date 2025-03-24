<?php

namespace App\Entity;


use App\Enum\Saison;
use App\Enum\Origine;
use App\Enum\TypeDePlat;
use App\Enum\Preparations;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $difficulte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;
    
    // enum type//////
    #[ORM\Column(type: 'string', length: 255, enumType: Saison::class)]
    private Saison $saison;

    #[ORM\Column (type:'string' ,length: 255, enumType: TypeDePlat::class)]
    private ?TypeDePlat $typeDePlat;

    #[ORM\Column (type:"string" , enumType: Origine::class)]
    private Origine $origine  ;

    #[ORM\Column(type: "string" ,enumType: Preparations::class)]
    private Preparations $preparation ;


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


    /**
     * @var Collection<int, DetailRecette>
     */
    #[ORM\OneToMany(targetEntity: DetailRecette::class, mappedBy: 'recette', orphanRemoval: true)]
    private Collection $detailRecette;


    /**
     * @var Collection<int, Utilisateur>
     */
    #[ORM\ManyToMany(targetEntity: Utilisateur::class, inversedBy: 'FavorisRecette')]
    private Collection $favoris;

    /**
     * @var Collection<int, Etape>
     */
    #[ORM\OneToMany(targetEntity: Etape::class, mappedBy: 'recette' , orphanRemoval: true)]
    private Collection $etapes;
 

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
          $this->favoris = new ArrayCollection();
          $this->etapes = new ArrayCollection();
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

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

    public function setDifficulte(?string $difficulte): static
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
    /**
     * @return Collection<int, Utilisateur>
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(Utilisateur $favori): static
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris->add($favori);
        }

        return $this;
    }

    public function removeFavori(Utilisateur $favori): static
    {
        $this->favoris->removeElement($favori);

        return $this;
    }

    /**
     * Get the value of saison
     */ 
    public function getSaison(): Saison
    {
        return $this->saison;
    }

    /**
     * Set the value of saison
     *
     * @return  self
     */ 
    public function setSaison($saison) : self
    {
        $this->saison = $saison;

        return $this;
    }


    

    public function getTypeDePlat(): ?TypeDePlat
    {
        return $this->typeDePlat;
    }

    public function setTypeDePlat(?TypeDePlat $typeDePlat): self
    {
        $this->typeDePlat = $typeDePlat;

        return $this;
    }

    /**
     * Get the value of origine
     */ 
    public function getOrigine(): Origine
    {
        return $this->origine;
    }

    /**
     * Set the value of origine
     *
     * @return  self
     */ 
    public function setOrigine($origine) : self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getPreparations(): Preparations
    {
        return $this->preparation;
    }

    public function setPreparations($preparation): self
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * @return Collection<int, Etape>
     */
    public function getEtapes(): Collection
    {
        return $this->etapes;
    }

    public function addEtape(Etape $etape): static
    {
        if (!$this->etapes->contains($etape)) {
            $this->etapes->add($etape);
            $etape->setRecette($this);
        }

        return $this;
    }

    public function removeEtape(Etape $etape): static
    {
        if ($this->etapes->removeElement($etape)) {
            // set the owning side to null (unless already changed)
            if ($etape->getRecette() === $this) {
                $etape->setRecette(null);
            }
        }

        return $this;
    }

   


}
