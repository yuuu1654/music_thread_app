<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

//▼ このクラスがエンティティであることを示すアノテーション
#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id] //IDのフィールドであることを示す 
    #[ORM\GeneratedValue] //値が自動生成されることを示す
    #[ORM\Column] // プロパティがテーブルに用意されているフィールドに対応するものであることを示す
    private ?int $id = null; 

    #[ORM\Column(length: 255)]
    private ?string $name_sei = null;

    #[ORM\Column(length: 255)]
    private ?string $name_mei = null;

    #[ORM\Column]
    private ?int $gender = null;

    #[ORM\Column(length: 255)]
    private ?string $pref_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deleted = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameSei(): ?string
    {
        return $this->name_sei;
    }

    public function setNameSei(string $name_sei): self
    {
        $this->name_sei = $name_sei;

        return $this;
    }

    public function getNameMei(): ?string
    {
        return $this->name_mei;
    }

    public function setNameMei(string $name_mei): self
    {
        $this->name_mei = $name_mei;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getPrefName(): ?string
    {
        return $this->pref_name;
    }

    public function setPrefName(string $pref_name): self
    {
        $this->pref_name = $pref_name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getDeleted(): ?\DateTimeInterface
    {
        return $this->deleted;
    }

    public function setDeleted(?\DateTimeInterface $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
