<?php

namespace App\Entity;

use App\Repository\ContractRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContractRepository::class)
 */
class Contract
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_cl;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_em;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_begin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_finish;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCl(): ?int
    {
        return $this->id_cl;
    }

    public function setIdCl(int $id_cl): self
    {
        $this->id_cl = $id_cl;

        return $this;
    }

    public function getIdEm(): ?int
    {
        return $this->id_em;
    }

    public function setIdEm(int $id_em): self
    {
        $this->id_em = $id_em;

        return $this;
    }

    public function getDateBegin(): ?string
    {
        return $this->date_begin;
    }

    public function setDateBegin(string $date_begin): self
    {
        $this->date_begin = $date_begin;

        return $this;
    }

    public function getDateFinish(): ?string
    {
        return $this->date_finish;
    }

    public function setDateFinish(string $date_finish): self
    {
        $this->date_finish = $date_finish;

        return $this;
    }
}
