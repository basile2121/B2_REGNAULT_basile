<?php

namespace App\Entity;

use App\Repository\AuteursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuteursRepository::class)
 */
class Auteurs
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
    private $noms;

    /**
     * @ORM\OneToMany(targetEntity=BandeDessinees::class, mappedBy="auteur_id", orphanRemoval=true)
     */
    private $bandeDessinees;

    public function __construct()
    {
        $this->bandeDessinees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    /**
     * @return Collection|BandeDessinees[]
     */
    public function getBandeDessinees(): Collection
    {
        return $this->bandeDessinees;
    }
    public function __toString()
    {
        return $this->getNoms();
    }

    public function addBandeDessinee(BandeDessinees $bandeDessinee): self
    {
        if (!$this->bandeDessinees->contains($bandeDessinee)) {
            $this->bandeDessinees[] = $bandeDessinee;
            $bandeDessinee->setAuteurId($this);
        }

        return $this;
    }

    public function removeBandeDessinee(BandeDessinees $bandeDessinee): self
    {
        if ($this->bandeDessinees->removeElement($bandeDessinee)) {
            // set the owning side to null (unless already changed)
            if ($bandeDessinee->getAuteurId() === $this) {
                $bandeDessinee->setAuteurId(null);
            }
        }

        return $this;
    }
}
