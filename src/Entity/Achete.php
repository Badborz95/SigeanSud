<?php

namespace App\Entity;

use App\Repository\AcheteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcheteRepository::class)]
class Achete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeobjet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeobjet(): ?int
    {
        return $this->codeobjet;
    }

    public function setCodeobjet(int $codeobjet): static
    {
        $this->codeobjet = $codeobjet;

        return $this;
    }
}
