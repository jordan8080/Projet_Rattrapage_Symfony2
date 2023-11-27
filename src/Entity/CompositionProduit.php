<?php

namespace App\Entity;

use App\Repository\CompositionProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionProduitRepository::class)]
class CompositionProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ProduitID = null;

    #[ORM\Column]
    private ?int $MatiereID = null;

    #[ORM\Column]
    private ?int $QuantiteUtilisee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduitID(): ?int
    {
        return $this->ProduitID;
    }

    public function setProduitID(int $ProduitID): static
    {
        $this->ProduitID = $ProduitID;

        return $this;
    }

    public function getMatiereID(): ?int
    {
        return $this->MatiereID;
    }

    public function setMatiereID(int $MatiereID): static
    {
        $this->MatiereID = $MatiereID;

        return $this;
    }

    public function getQuantiteUtilisee(): ?int
    {
        return $this->QuantiteUtilisee;
    }

    public function setQuantiteUtilisee(int $QuantiteUtilisee): static
    {
        $this->QuantiteUtilisee = $QuantiteUtilisee;

        return $this;
    }
}
