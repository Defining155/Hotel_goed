<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KamerRepository")
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Kamer_type;

    /**
     * @ORM\Column(type="float")
     */

    private $Beschrijving;

    /**
     * @ORM\Column(type="float")
     */
    private $Kamer_nr;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Soort")
     */
    private $SoortId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerType(): ?string
    {
        return $this->Kamer_type;
    }

    public function setKamerType(string $Kamer_type): self
    {
        $this->Kamer_type = $Kamer_type;

        return $this;
    }

    public function getPrijs(): ?float
    {
        return $this->Prijs;
    }

    public function setPrijs(float $Prijs): self
    {
        $this->Prijs = $Prijs;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->Beschrijving;
    }

    public function setBeschrijving(string $Beschrijving): self
    {
        $this->Beschrijving = $Beschrijving;

        return $this;
    }

    public function getKamerNr(): ?float
    {
        return $this->Kamer_nr;
    }

    public function setKamerNr(float $Kamer_nr): self
    {
        $this->Kamer_nr = $Kamer_nr;

        return $this;
    }

    public function getSoortId(): ?soort
    {
        return $this->SoortId;
    }

    public function setSoortId(?soort $SoortId): self
    {
        $this->SoortId = $SoortId;

        return $this;
    }
}
