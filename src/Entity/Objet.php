<?php

namespace App\Entity;

use App\Repository\ObjetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjetRepository::class)]
class Objet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomObjet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomObjet(): ?string
    {
        return $this->nomObjet;
    }

    public function setNomObjet(string $nomObjet): static
    {
        $this->nomObjet = $nomObjet;

        return $this;
    }
}
