<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Controller\TaskController;
use App\Controller\TaskControllerEmail;
use App\Controller\TaskControllerId;
use App\Controller\TaskStatus;
use App\Controller\User\RegistrationController;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource(operations: [
    new Post(
        uriTemplate: 'user/register',
        controller: RegistrationController::class,
        denormalizationContext: ['groups' => 'createUser'],
    ),

    new Post(
        uriTemplate: 'user/findTasks',
        controller: TaskControllerEmail::class,
        normalizationContext: ['groups' => 'task'],
        denormalizationContext: ['groups' => 'find'],
        security: 'is_granted ("ROLE_ADMIN") or is_granted("ROLE_MANAGER")'

    ),

    new GetCollection(
        uriTemplate: '/users',
        security: 'is_granted ("ROLE_ADMIN")',

    ),

    new Get(
        uriTemplate: '/tasks/user/{id}',
        controller: TaskControllerId::class,
        normalizationContext: ['groups' => 'task'],
        security: 'is_granted ("ROLE_ADMIN") or is_granted("ROLE_MANAGER")',

    ),
    new GetCollection(
        uriTemplate: 'api/tasks/user',
        controller: TaskController::class,
        normalizationContext: ['groups' => 'task'],
        security: 'is_granted ("ROLE_USER")',

    ),
])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Groups(['createUser', 'find'])]

    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];
    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Groups('createUser')]
    private ?string $password = null;


    #[ORM\OneToMany(mappedBy: "user", targetEntity: "Task")]
    #[Groups('task')]
    private Collection $task;

    public function __construct()
    {
        $this->task = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getTasks(): Array
    {
        return $this->task->toArray();
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
