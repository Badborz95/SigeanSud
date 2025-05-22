<?php

namespace App\Entity;

use App\Repository\PreteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreteRepository::class)]
class Prete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $codeobjet = null;

    public function getId(): ?int
    {
        return $this->codeobjet;
    }
}
