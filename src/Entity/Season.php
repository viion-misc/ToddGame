<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
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
    private $name;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $week1;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $week2;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $week3;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $week4;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seasonPickLockout;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seasonStartTime;
    
    public function __construct($name, $seasonPickLockout, $seasonStartTime)
    {
        $this->name = $name;
        $this->seasonPickLockout = $seasonPickLockout;
        $this->seasonStartTime = $seasonStartTime;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWeek1(): ?array
    {
        return $this->week1;
    }

    public function setWeek1(?array $week1): self
    {
        $this->week1 = $week1;

        return $this;
    }

    public function getWeek2(): ?array
    {
        return $this->week2;
    }

    public function setWeek2(?array $week2): self
    {
        $this->week2 = $week2;

        return $this;
    }

    public function getWeek3(): ?array
    {
        return $this->week3;
    }

    public function setWeek3(?array $week3): self
    {
        $this->week3 = $week3;

        return $this;
    }

    public function getWeek4(): ?array
    {
        return $this->week4;
    }

    public function setWeek4(?array $week4): self
    {
        $this->week4 = $week4;

        return $this;
    }

    public function getSeasonPickLockout(): ?int
    {
        return $this->seasonPickLockout;
    }

    public function setSeasonPickLockout(?int $seasonPickLockout): self
    {
        $this->seasonPickLockout = $seasonPickLockout;

        return $this;
    }

    public function getSeasonStartTime(): ?int
    {
        return $this->seasonStartTime;
    }

    public function setSeasonStartTime(?int $seasonStartTime): self
    {
        $this->seasonStartTime = $seasonStartTime;

        return $this;
    }
}
