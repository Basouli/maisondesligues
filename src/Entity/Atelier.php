<?php

namespace App\Entity;

use App\Repository\AtelierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AtelierRepository::class)
 */
class Atelier
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
    private $nbPlaceMaxi;

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

    public function getNbPlaceMaxi(): ?int
    {
        return $this->nbPlaceMaxi;
    }

    public function setNbPlaceMaxi(int $nbPlaceMaxi): self
    {
        $this->nbPlaceMaxi = $nbPlaceMaxi;

        return $this;
    }
}
