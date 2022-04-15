<?php

namespace App\Entity;

use App\Repository\NuiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NuiteRepository::class)
 */
class Nuite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNuitee;

    /**
     * @ORM\ManyToOne(targetEntity=Inscription::class, inversedBy="nuites")
     */
    private $inscription;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class, inversedBy="nuites")
     */
    private $hotel;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieChambre::class, inversedBy="nuites")
     */
    private $categorieChambre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNuitee(): ?\DateTimeInterface
    {
        return $this->dateNuitee;
    }

    public function setDateNuitee(\DateTimeInterface $dateNuitee): self
    {
        $this->dateNuitee = $dateNuitee;

        return $this;
    }

    public function getInscription(): ?Inscription
    {
        return $this->inscription;
    }

    public function setInscription(?Inscription $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getCategorieChambre(): ?CategorieChambre
    {
        return $this->categorieChambre;
    }

    public function setCategorieChambre(?CategorieChambre $categorieChambre): self
    {
        $this->categorieChambre = $categorieChambre;

        return $this;
    }
}
