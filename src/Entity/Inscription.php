<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 */
class Inscription
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
    private $dateInscription;

    /**
     * @ORM\OneToOne(targetEntity=Compte::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte;

    /**
     * @ORM\ManyToMany(targetEntity=Atelier::class, mappedBy="inscriptions")
     */
    private $ateliers;

    /**
     * @ORM\OneToMany(targetEntity=Nuite::class, mappedBy="inscription")
     */
    private $nuites;

    /**
     * @ORM\OneToMany(targetEntity=Restauration::class, mappedBy="inscription")
     */
    private $restaurations;

    /**
     * @ORM\OneToMany(targetEntity=Congres::class, mappedBy="Inscriptions")
     */
    private $congres;

    public function __construct()
    {
        $this->ateliers = new ArrayCollection();
        $this->nuites = new ArrayCollection();
        $this->restaurations = new ArrayCollection();
        $this->congres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(Compte $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * @return Collection<int, Atelier>
     */
    public function getAteliers(): Collection
    {
        return $this->ateliers;
    }

    public function addAtelier(Atelier $atelier): self
    {
        if (!$this->ateliers->contains($atelier)) {
            $this->ateliers[] = $atelier;
            $atelier->addInscription($this);
        }

        return $this;
    }

    public function removeAtelier(Atelier $atelier): self
    {
        if ($this->ateliers->removeElement($atelier)) {
            $atelier->removeInscription($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Nuite>
     */
    public function getNuites(): Collection
    {
        return $this->nuites;
    }

    public function addNuite(Nuite $nuite): self
    {
        if (!$this->nuites->contains($nuite)) {
            $this->nuites[] = $nuite;
            $nuite->setInscription($this);
        }

        return $this;
    }

    public function removeNuite(Nuite $nuite): self
    {
        if ($this->nuites->removeElement($nuite)) {
            // set the owning side to null (unless already changed)
            if ($nuite->getInscription() === $this) {
                $nuite->setInscription(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Restauration>
     */
    public function getRestaurations(): Collection
    {
        return $this->restaurations;
    }

    public function addRestauration(Restauration $restauration): self
    {
        if (!$this->restaurations->contains($restauration)) {
            $this->restaurations[] = $restauration;
            $restauration->setInscription($this);
        }

        return $this;
    }

    public function removeRestauration(Restauration $restauration): self
    {
        if ($this->restaurations->removeElement($restauration)) {
            // set the owning side to null (unless already changed)
            if ($restauration->getInscription() === $this) {
                $restauration->setInscription(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Congres>
     */
    public function getCongres(): Collection
    {
        return $this->congres;
    }

    public function addCongre(Congres $congre): self
    {
        if (!$this->congres->contains($congre)) {
            $this->congres[] = $congre;
            $congre->setInscriptions($this);
        }

        return $this;
    }

    public function removeCongre(Congres $congre): self
    {
        if ($this->congres->removeElement($congre)) {
            // set the owning side to null (unless already changed)
            if ($congre->getInscriptions() === $this) {
                $congre->setInscriptions(null);
            }
        }

        return $this;
    }
}
