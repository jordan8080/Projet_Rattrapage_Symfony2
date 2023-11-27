<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ProduitID = null;

    #[ORM\Column(length: 255)]
    private ?string $NomProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?int $PrixVente = null;

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

    public function getNomProduit(): ?string
    {
        return $this->NomProduit;
    }

    public function setNomProduit(string $NomProduit): static
    {
        $this->NomProduit = $NomProduit;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrixVente(): ?int
    {
        return $this->PrixVente;
    }

    public function setPrixVente(int $PrixVente): static
    {
        $this->PrixVente = $PrixVente;

        return $this;
    }
}
