<?php

namespace App\Entity;

use App\Repository\CohabiterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CohabiterRepository::class)]
class Cohabiter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeespece_1 = null;

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

    public function getCodeespece1(): ?int
    {
        return $this->codeespece_1;
    }

    public function setCodeespece1(int $codeespece_1): static
    {
        $this->codeespece_1 = $codeespece_1;

        return $this;
    }
}
