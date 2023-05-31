<?php

namespace App\Controller;
use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\User\UserInterface;


class TaskStatus extends AbstractController
{
    private $allStatus = ['new', 'in_progress', 'completed'];

    public function __invoke(Security $security,Task $task, EntityManagerInterface $entityManager): JsonResponse
    {


        $currentUser = $security->getUser();

        if ($task->getUser() !== $currentUser&& !$security->isGranted('ROLE_ADMIN') && !$security->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Вы не можете изменять статусы задач, которые не назначены на вас.');
        }

        if (!in_array($task->getStatus(), $this->allStatus)) {
            throw new AccessDeniedException('Недопустимый статус, попробуйте new, in_progress, completed ');
        }

        $entityManager->persist($task);
        $entityManager->flush();

        return $this->json([
            'status' => $task->getStatus(),
        ]);
    }
}



