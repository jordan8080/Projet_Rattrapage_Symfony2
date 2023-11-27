<?php

namespace App\Entity;

use App\Repository\VentesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VentesRepository::class)]
class Ventes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $VenteID = null;

    #[ORM\Column]
    private ?int $ProduitID = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateVente = null;

    #[ORM\Column]
    private ?int $Quantite = null;

    #[ORM\Column]
    private ?int $PrixTotal = null;

    #[ORM\Column]
    private ?int $ClientID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVenteID(): ?int
    {
        return $this->VenteID;
    }

    public function setVenteID(int $VenteID): static
    {
        $this->VenteID = $VenteID;

        return $this;
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

    public function getDateVente(): ?\DateTimeInterface
    {
        return $this->DateVente;
    }

    public function setDateVente(\DateTimeInterface $DateVente): static
    {
        $this->DateVente = $DateVente;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): static
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getPrixTotal(): ?int
    {
        return $this->PrixTotal;
    }

    public function setPrixTotal(int $PrixTotal): static
    {
        $this->PrixTotal = $PrixTotal;

        return $this;
    }

    public function getClientID(): ?int
    {
        return $this->ClientID;
    }

    public function setClientID(int $ClientID): static
    {
        $this->ClientID = $ClientID;

        return $this;
    }
}
