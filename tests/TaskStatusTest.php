<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Task;
use App\Factory\TaskFactory;
use App\Factory\UserFactory;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;
use Symfony\Component\HttpFoundation\Response;

class TaskStatusTest extends ApiTestCase
{
    use RefreshDatabaseTrait;

    public function testChangeTaskStatus(): void
    {
        // Create user and task
        $user = UserFactory::new()->create();
        $task = TaskFactory::new()->create(['user' => $user, 'status' => 'new']);

// Authenticate client
        $client = static::createClient();
        $client->loginUser($user);

// Send PUT request to change status
        $client->request('PUT', '/tasks/' . $task->getId() . '/status', [
            'json' => [
                'status' => $this->faker->randomElement(['in_progress', 'done']),
            ],
        ]);

// Assert response status code is 200 OK
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

// Assert task status has been updated
        $entityManager = static::getContainer()->get('doctrine')->getManager();
        $task = $entityManager->getRepository(Task::class)->find($task->getId());
        $this->assertContains($task->getStatus(), ['in_progress', 'done']);
    }
}
