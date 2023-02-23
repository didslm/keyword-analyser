<?php

namespace App\Tests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class KeywordRecommenderControllerTest extends WebTestCase
{
    public function testShouldReturnSuccessResponse(): void
    {

        $expectedResponse = [
            'keyword' => 'test'
        ];

        $client = static::createClient();

        // Request a specific page
        $client->request('GET', '/v1/tags/test/keywords');

        $response = $client->getResponse()->getContent();

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertEquals($expectedResponse, json_decode($response, true));
   
    }
}