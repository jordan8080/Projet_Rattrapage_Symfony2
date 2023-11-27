<?php

namespace App\Entity;

use App\Repository\CommandeFournisseurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeFournisseurRepository::class)]
class CommandeFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $CommandeID = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateCommande = null;

    #[ORM\Column]
    private ?int $TotalCommande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommandeID(): ?int
    {
        return $this->CommandeID;
    }

    public function setCommandeID(int $CommandeID): static
    {
        $this->CommandeID = $CommandeID;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->DateCommande;
    }

    public function setDateCommande(\DateTimeInterface $DateCommande): static
    {
        $this->DateCommande = $DateCommande;

        return $this;
    }

    public function getTotalCommande(): ?int
    {
        return $this->TotalCommande;
    }

    public function setTotalCommande(int $TotalCommande): static
    {
        $this->TotalCommande = $TotalCommande;

        return $this;
    }
}
