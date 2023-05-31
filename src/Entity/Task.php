<?php
// src/Entity/Task.php

namespace App\Entity;

use ApiPlatform\Doctrine\Odm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Controller\TaskStatus;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Choice;


#[ORM\Entity ]
#[ApiResource(operations: [
    new  Post(
        uriTemplate: '/task/{id}/status',
        security: 'is_granted ("ROLE_USER")',
        controller: TaskStatus::class,
        denormalizationContext: ['groups' => "status"],


    ),
    new  Post(

        security: 'is_granted ("ROLE_ADMIN")',

    ),
    new Put(
        security: 'is_granted ("ROLE_ADMIN") or is_granted("ROLE_MANAGER")',
        denormalizationContext: ['groups' => "id_user"],
    )
])]

class Task
{


    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column("AUTO")]

    private ?int $id;


    #[ORM\Column( length: 20)]
    #[Choice(choices: ["new", "in_progress", "completed"])]
    #[Groups(["status"])]
    public string $status;


    #[ORM\Column(type:"string", length:255)]

    public ?string $title;

    #[ORM\ManyToOne(targetEntity:"User", inversedBy:"task")]
    #[Groups(["id_user"])]
    private ?User $user;


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function setId(?int $id): Task
    {
        $this->id = $id;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }



}
