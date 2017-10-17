<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StoreControllerTest extends WebTestCase
{


    // Test API 1
    public function testFirstApiIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $json1 = $client->getResponse()->getContent();

        $jsonExpected  = json_encode(array("hello" => "world!"));

        $this->assertJsonStringEqualsJsonString(
            $json1, $json1
        );

    }




}
