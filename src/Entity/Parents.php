<?php

namespace App\Entity;

use App\Repository\ParentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParentsRepository::class)]
class Parents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece_a_pour_enfant = null;

    #[ORM\Column(length: 10)]
    private ?string $nombapteme_a_pour_enfant = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece_a_pour_parent = null;

    #[ORM\Column(length: 10)]
    private ?string $nombapteme_a_pour_parent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeespeceAPourEnfant(): ?int
    {
        return $this->codeespece_a_pour_enfant;
    }

    public function setCodeespeceAPourEnfant(int $codeespece_a_pour_enfant): static
    {
        $this->codeespece_a_pour_enfant = $codeespece_a_pour_enfant;

        return $this;
    }

    public function getNombaptemeAPourEnfant(): ?string
    {
        return $this->nombapteme_a_pour_enfant;
    }

    public function setNombaptemeAPourEnfant(string $nombapteme_a_pour_enfant): static
    {
        $this->nombapteme_a_pour_enfant = $nombapteme_a_pour_enfant;

        return $this;
    }

    public function getCodeespeceAPourParent(): ?int
    {
        return $this->codeespece_a_pour_parent;
    }

    public function setCodeespeceAPourParent(int $codeespece_a_pour_parent): static
    {
        $this->codeespece_a_pour_parent = $codeespece_a_pour_parent;

        return $this;
    }

    public function getNombaptemeAPourParent(): ?string
    {
        return $this->nombapteme_a_pour_parent;
    }

    public function setNombaptemeAPourParent(string $nombapteme_a_pour_parent): static
    {
        $this->nombapteme_a_pour_parent = $nombapteme_a_pour_parent;

        return $this;
    }
}
