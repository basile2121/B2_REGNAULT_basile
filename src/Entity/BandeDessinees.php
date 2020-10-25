<?php

namespace App\Entity;

use App\Repository\BandeDessineesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BandeDessineesRepository::class)
 */
class BandeDessinees
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
    private $serie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tome;

    /**
     * @ORM\Column(type="date")
     */
    private $date_parution;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=auteurs::class, inversedBy="bandeDessinees")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTome(): ?string
    {
        return $this->tome;
    }

    public function setTome(string $tome): self
    {
        $this->tome = $tome;

        return $this;
    }

    public function getDateParution(): ?\DateTimeInterface
    {
        return $this->date_parution;
    }

    public function setDateParution(\DateTimeInterface $date_parution): self
    {
        $this->date_parution = $date_parution;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteurId(): ?auteurs
    {
        return $this->auteur_id;
    }

    public function setAuteurId(?auteurs $auteur_id): self
    {
        $this->auteur_id = $auteur_id;

        return $this;
    }
    public function __toString()
    {
        return $this->getTitre();
    }
}
