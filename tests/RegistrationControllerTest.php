<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RecreateDatabaseTrait;

class RegistrationControllerTest extends ApiTestCase
{
    use RecreateDatabaseTrait;

    public function testCreateUser(): void
    {
        static::createClient()->request('POST', 'user/register',[
            'json' => [


                'email' => 'test_name',
                'password' => 'test_word'
            ]
        ]);

        $this->assertResponseStatusCodeSame(201);
    }
}
