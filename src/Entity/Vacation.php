<?php

namespace App\Entity;

use App\Repository\VacationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VacationRepository::class)
 */
class Vacation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateheureDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateheureFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateheureDebut(): ?\DateTimeInterface
    {
        return $this->dateheureDebut;
    }

    public function setDateheureDebut(\DateTimeInterface $dateheureDebut): self
    {
        $this->dateheureDebut = $dateheureDebut;

        return $this;
    }

    public function getDateheureFin(): ?\DateTimeInterface
    {
        return $this->dateheureFin;
    }

    public function setDateheureFin(\DateTimeInterface $dateheureFin): self
    {
        $this->dateheureFin = $dateheureFin;

        return $this;
    }
}
