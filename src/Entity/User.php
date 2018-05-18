<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;
    /**
     * @ORM\Column(type="integer")
     */
    private $code;
    /**
     * @ORM\Column(type="boolean")
     */
    private $admin;
    
    public function __construct($name, $isAdmin = false)
    {
        $this->name = trim($name);
        $this->admin = $isAdmin;
        $this->code = mt_rand(1000,9999);
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

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }
    
    public function getAdmin(): bool
    {
        return $this->admin;
    }
    
    public function setAdmin(bool $admin): self
    {
        $this->admin = $admin;
        
        return $this;
    }
}
