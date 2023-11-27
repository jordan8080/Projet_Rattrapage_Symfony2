<?php

namespace App\Entity;

use App\Repository\MatierePremiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatierePremiereRepository::class)]
class MatierePremiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $MatiereID = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeBois = null;

    #[ORM\Column]
    private ?int $Quantite = null;

    #[ORM\Column]
    private ?int $FournisseurID = null;

    #[ORM\Column]
    private ?int $PrixUnitaire = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTypeBois(): ?string
    {
        return $this->TypeBois;
    }

    public function setTypeBois(string $TypeBois): static
    {
        $this->TypeBois = $TypeBois;

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

    public function getFournisseurID(): ?int
    {
        return $this->FournisseurID;
    }

    public function setFournisseurID(int $FournisseurID): static
    {
        $this->FournisseurID = $FournisseurID;

        return $this;
    }

    public function getPrixUnitaire(): ?int
    {
        return $this->PrixUnitaire;
    }

    public function setPrixUnitaire(int $PrixUnitaire): static
    {
        $this->PrixUnitaire = $PrixUnitaire;

        return $this;
    }
}
