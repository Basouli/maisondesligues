<?php

namespace App\Entity;

use App\Repository\QualiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QualiteRepository::class)
 */
class Qualite
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
    private $LibelleQualite;

    /**
     * @ORM\OneToMany(targetEntity=Licencie::class, mappedBy="qualite", orphanRemoval=true)
     */
    private $licencies;

    public function __construct()
    {
        $this->licencies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleQualite(): ?string
    {
        return $this->LibelleQualite;
    }

    public function setLibelleQualite(string $LibelleQualite): self
    {
        $this->LibelleQualite = $LibelleQualite;

        return $this;
    }

    /**
     * @return Collection<int, Licencie>
     */
    public function getLicencies(): Collection
    {
        return $this->licencies;
    }

    public function addLicency(Licencie $licency): self
    {
        if (!$this->licencies->contains($licency)) {
            $this->licencies[] = $licency;
            $licency->setQualite($this);
        }

        return $this;
    }

    public function removeLicency(Licencie $licency): self
    {
        if ($this->licencies->removeElement($licency)) {
            // set the owning side to null (unless already changed)
            if ($licency->getQualite() === $this) {
                $licency->setQualite(null);
            }
        }

        return $this;
    }
}
