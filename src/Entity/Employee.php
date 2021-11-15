<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
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
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datebirth_em;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_of_employement;

    /**
     * @ORM\Column(type="string", length=13)
     */
    private $CNP_em;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getDatebirthEm(): ?string
    {
        return $this->datebirth_em;
    }

    public function setDatebirthEm(string $datebirth_em): self
    {
        $this->datebirth_em = $datebirth_em;

        return $this;
    }

    public function getDateOfEmployement(): ?string
    {
        return $this->date_of_employement;
    }

    public function setDateOfEmployement(string $date_of_employement): self
    {
        $this->date_of_employement = $date_of_employement;

        return $this;
    }

    public function getCNPEm(): ?string
    {
        return $this->CNP_em;
    }

    public function setCNPEm(string $CNP_em): self
    {
        $this->CNP_em = $CNP_em;

        return $this;
    }
}
