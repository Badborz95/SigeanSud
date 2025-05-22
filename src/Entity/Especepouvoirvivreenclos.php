<?php

namespace App\Entity;

use App\Repository\EspecepouvoirvivreenclosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EspecepouvoirvivreenclosRepository::class)]
class Especepouvoirvivreenclos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece = null;

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
