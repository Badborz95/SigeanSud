<?php

namespace App\Entity;

use App\Repository\SoignantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoignantRepository::class)]
class Soignant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $matricule = null;

    #[ORM\Column(length: 50)]
    private ?string $nomSoignant = null;

    #[ORM\Column(length: 50)]
    private ?string $prenomSoignant = null;

    #[ORM\Column]
    private ?int $telSoignant = null;

    public function getId(): ?int
    {
        return $this->matricule;
    }

    public function getNomSoignant(): ?string
    {
        return $this->nomSoignant;
    }

    public function setNomSoignant(string $nomSoignant): static
    {
        $this->nomSoignant = $nomSoignant;

        return $this;
    }

    public function getPrenomSoignant(): ?string
    {
        return $this->prenomSoignant;
    }

    public function setPrenomSoignant(string $prenomSoignant): static
    {
        $this->prenomSoignant = $prenomSoignant;

        return $this;
    }

    public function getTelSoignant(): ?int
    {
        return $this->telSoignant;
    }

    public function setTelSoignant(int $telSoignant): static
    {
        $this->telSoignant = $telSoignant;

        return $this;
    }
}
