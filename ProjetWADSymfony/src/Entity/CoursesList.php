<?php

namespace App\Entity;

use App\Repository\CoursesListRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'listCourses')]
    private ?Utilisateur $utilisateur = null;

    /**
     * @var Collection<int, DetailCourses>
     */
    #[ORM\OneToMany(targetEntity: DetailCourses::class, mappedBy: 'coursesList')]
    private Collection $detailsCourses;
    

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
          $this->detailsCourses = new ArrayCollection();
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
     * @return Collection<int, DetailCourses>
     */
    public function getDetailsCourses(): Collection
    {
        return $this->detailsCourses;
    }

    public function addDetailsCourse(DetailCourses $detailsCourse): static
    {
        if (!$this->detailsCourses->contains($detailsCourse)) {
            $this->detailsCourses->add($detailsCourse);
            $detailsCourse->setCoursesList($this);
        }

        return $this;
    }

    public function removeDetailsCourse(DetailCourses $detailsCourse): static
    {
        if ($this->detailsCourses->removeElement($detailsCourse)) {
            // set the owning side to null (unless already changed)
            if ($detailsCourse->getCoursesList() === $this) {
                $detailsCourse->setCoursesList(null);
            }
        }

        return $this;
    }
}
