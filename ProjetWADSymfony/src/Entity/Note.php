<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Valeur = null;

    //   // hydrate 
    //   public function hydrate(array $init)
    //   {
    //       foreach ($init as $propriete => $valeur) {
    //           $nomSet = "set" . ucfirst($propriete);
    //           if (!method_exists($this, $nomSet)) {
    //               // à nous de voir selon le niveau de restriction...
    //               // throw new Exception("La méthode {$nomSet} n'existe pas");
    //           } else {
    //               // appel au set
    //               $this->$nomSet($valeur);
    //           }
    //       }
    //   }
    //   // constructeur
    //   public function __construct(array $init = [])
    //   {
    //       $this->hydrate($init);
    //   }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeur(): ?int
    {
        return $this->Valeur;
    }

    public function setValeur(?int $Valeur): static
    {
        $this->Valeur = $Valeur;

        return $this;
    }
}
