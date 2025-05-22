<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenirRepository::class)]
class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeenclos = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $codeobjet = null;

    #[ORM\Column(nullable: true)]
    private ?int $qteobjet = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeobjet(): ?int
    {
        return $this->codeobjet;
    }

    public function setCodeobjet(int $codeobjet): static
    {
        $this->codeobjet = $codeobjet;

        return $this;
    }

    public function getQteobjet(): ?int
    {
        return $this->qteobjet;
    }

    public function setQteobjet(?int $qteobjet): static
    {
        $this->qteobjet = $qteobjet;

        return $this;
    }
}
