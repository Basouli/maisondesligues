<?php

namespace App\Entity;

use App\Repository\ProposerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProposerRepository::class)
 */
class Proposer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $tarifNuite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarifNuite(): ?float
    {
        return $this->tarifNuite;
    }

    public function setTarifNuite(float $tarifNuite): self
    {
        $this->tarifNuite = $tarifNuite;

        return $this;
    }
}