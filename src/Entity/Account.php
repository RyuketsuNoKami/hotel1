<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccountRepository::class)
 */
class Account
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $parola;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $datebirth_acc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getParola(): ?string
    {
        return $this->parola;
    }

    public function setParola(string $parola): self
    {
        $this->parola = $parola;

        return $this;
    }

    public function getDatebirthAcc(): ?string
    {
        return $this->datebirth_acc;
    }

    public function setDatebirthAcc(?string $datebirth_acc): self
    {
        $this->datebirth_acc = $datebirth_acc;

        return $this;
    }
}
