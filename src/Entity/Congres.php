<?php

namespace App\Entity;

use App\Repository\CongresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CongresRepository::class)
 */
class Congres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $TarifsInscription;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity=Inscription::class, inversedBy="congres")
     */
    private $Inscriptions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getTarifsInscription(): ?int
    {
        return $this->TarifsInscription;
    }

    public function setTarifsInscription(int $TarifsInscription): self
    {
        $this->TarifsInscription = $TarifsInscription;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): self
    {
        $this->date = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getInscriptions(): ?Inscription
    {
        return $this->Inscriptions;
    }

    public function setInscriptions(?Inscription $Inscriptions): self
    {
        $this->Inscriptions = $Inscriptions;

        return $this;
    }
}
