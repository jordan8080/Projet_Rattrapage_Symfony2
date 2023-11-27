<?php

namespace App\Entity;

use App\Repository\FournisseurTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurTypeRepository::class)]
class FournisseurType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $FournisseurID = null;

    #[ORM\Column]
    private ?int $TypeID = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTypeID(): ?int
    {
        return $this->TypeID;
    }

    public function setTypeID(int $TypeID): static
    {
        $this->TypeID = $TypeID;

        return $this;
    }
}
