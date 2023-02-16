<?php

namespace App\Tests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class PingControllerTest extends WebTestCase
{
    public function testShouldSucceed()
    {
        $client = static::createClient();

        // Request a specific page
        $client->request('GET', '/v1/ping');

        $response = $client->getResponse()->getContent();

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertEquals(['ping' => true], json_decode($response, true));

    }
}