<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $nce = null;

    #[ORM\Column(length: 50)]
    private ?string $username = null;

    public function getNce(): ?int
    {
        return $this->nce;
    }
    public function setNce(string $nce): self
    {
        $this->nce = $nce;

        return $this;
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
}
