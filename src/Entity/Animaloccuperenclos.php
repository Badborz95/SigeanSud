<?php

namespace App\Entity;

use App\Repository\AnimaloccuperenclosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimaloccuperenclosRepository::class)]
class Animaloccuperenclos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece = null;

    #[ORM\Column(length: 10)]
    private ?string $nombapteme = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedebut = null;

    #[ORM\Column(nullable: true)]
    private ?int $encours = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeenclos = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeespece(): ?int
    {
        return $this->codeespece;
    }

    public function setCodeespece(int $codeespece): static
    {
        $this->codeespece = $codeespece;

        return $this;
    }

    public function getNombapteme(): ?string
    {
        return $this->nombapteme;
    }

    public function setNombapteme(string $nombapteme): static
    {
        $this->nombapteme = $nombapteme;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getEncours(): ?int
    {
        return $this->encours;
    }

    public function setEncours(?int $encours): static
    {
        $this->encours = $encours;

        return $this;
    }

    public function getCodeenclos(): ?int
    {
        return $this->codeenclos;
    }

    public function setCodeenclos(int $codeenclos): static
    {
        $this->codeenclos = $codeenclos;

        return $this;
    }
}
