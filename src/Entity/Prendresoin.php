<?php

namespace App\Entity;

use App\Repository\PrendresoinRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrendresoinRepository::class)]
class Prendresoin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $matricule = null;

    public function getCodeespece(): ?int
    {
        return $this->codeespece;
    }

    public function setCodeespece(int $codeespece): static
    {
        $this->codeespece = $codeespece;

        return $this;
    }

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function setMatricule(int $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }
}
