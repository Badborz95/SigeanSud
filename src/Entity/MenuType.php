<?php

namespace App\Entity;

use App\Repository\MenuTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuTypeRepository::class)]
class MenuType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $libelleAliment = null;

    #[ORM\Column]
    private ?int $qteRecommande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleAliment(): ?string
    {
        return $this->libelleAliment;
    }

    public function setLibelleAliment(string $libelleAliment): static
    {
        $this->libelleAliment = $libelleAliment;

        return $this;
    }

    public function getQteRecommande(): ?int
    {
        return $this->qteRecommande;
    }

    public function setQteRecommande(int $qteRecommande): static
    {
        $this->qteRecommande = $qteRecommande;

        return $this;
    }
}
