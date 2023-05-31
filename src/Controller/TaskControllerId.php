<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Http\Attribute\IsGranted;



class TaskControllerId extends AbstractController
{

    public function __construct(
        private readonly EntityManagerInterface $entityManager)
    {

    }

    public function __invoke(User $user): JsonResponse
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $user]);


        if (!$user) {
            throw new NotFoundHttpException('Not found user');
        }

        return new JsonResponse($user->getTasks());
    }
}