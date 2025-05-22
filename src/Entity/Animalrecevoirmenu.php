<?php

namespace App\Entity;

use App\Repository\AnimalrecevoirmenuRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalrecevoirmenuRepository::class)]
class Animalrecevoirmenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nombapteme = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateheuremanger = null;

    #[ORM\Column(nullable: true)]
    private ?int $qtereelle = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codemenu = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeespece(): ?int
    {
        return $this->codeespece;
    }

    public function setCodeespece(int $codeespece): static
    {
        $this->codeespece = $codeespece;

        return $this;
    }

    public function getDateheuremanger(): ?\DateTimeInterface
    {
        return $this->dateheuremanger;
    }

    public function setDateheuremanger(\DateTimeInterface $dateheuremanger): static
    {
        $this->dateheuremanger = $dateheuremanger;

        return $this;
    }

    public function getQtereelle(): ?int
    {
        return $this->qtereelle;
    }

    public function setQtereelle(?int $qtereelle): static
    {
        $this->qtereelle = $qtereelle;

        return $this;
    }

    public function getCodemenu(): ?int
    {
        return $this->codemenu;
    }

    public function setCodemenu(int $codemenu): static
    {
        $this->codemenu = $codemenu;

        return $this;
    }
}
