<?php

namespace App\Entity;

use App\Repository\MouvementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MouvementRepository::class)]
class Mouvement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $positionDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $positionArrivee = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateMouvement = null;

    #[ORM\Column(length: 255)]
    private ?string $typeMouvement = null;

    #[ORM\ManyToOne(inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $joueur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPositionDepart(): ?string
    {
        return $this->positionDepart;
    }

    public function setPositionDepart(string $positionDepart): static
    {
        $this->positionDepart = $positionDepart;

        return $this;
    }

    public function getPositionArrivee(): ?string
    {
        return $this->positionArrivee;
    }

    public function setPositionArrivee(string $positionArrivee): static
    {
        $this->positionArrivee = $positionArrivee;

        return $this;
    }

    public function getDateMouvement(): ?\DateTimeInterface
    {
        return $this->dateMouvement;
    }

    public function setDateMouvement(\DateTimeInterface $dateMouvement): static
    {
        $this->dateMouvement = $dateMouvement;

        return $this;
    }

    public function getTypeMouvement(): ?string
    {
        return $this->typeMouvement;
    }

    public function setTypeMouvement(string $typeMouvement): static
    {
        $this->typeMouvement = $typeMouvement;

        return $this;
    }

    public function getJoueur(): ?User
    {
        return $this->joueur;
    }

    public function setJoueur(?User $joueur): static
    {
        $this->joueur = $joueur;

        return $this;
    }
}
