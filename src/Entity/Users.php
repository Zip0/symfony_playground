<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $name = null;

    #[ORM\Column(length: 128)]
    private ?string $surname = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $password_changed = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $password_change_date = null;

    #[ORM\Column(length: 255)]
    private ?string $current_password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPasswordChanged(): ?int
    {
        return $this->password_changed;
    }

    public function setPasswordChanged(int $password_changed): static
    {
        $this->password_changed = $password_changed;

        return $this;
    }

    public function getPasswordChangeDate(): ?\DateTimeInterface
    {
        return $this->password_change_date;
    }

    public function setPasswordChangeDate(\DateTimeInterface $password_change_date): static
    {
        $this->password_change_date = $password_change_date;

        return $this;
    }

    public function getCurrentPassword(): ?string
    {
        return $this->current_password;
    }

    public function setCurrentPassword(string $current_password): static
    {
        $this->current_password = $current_password;

        return $this;
    }
}
