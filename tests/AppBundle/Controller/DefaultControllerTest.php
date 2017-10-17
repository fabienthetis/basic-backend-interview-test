<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    // test of the response of the API 2 /neo/store_data
    public function testApiStoreData(){


        $url = '/neo/store_data';

        $client = static::createClient();

        $crawler = $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals(200, $content['status']);

        $this->assertArrayHasKey('count', $content);

    }


    // Test API 3 - For sure one element must be present in db to have a correct behaviour
    // we check that one element is present and the content of the json response
    public function testApiDbEntries(){


        $url = '/neo/hazardous';

        $client = static::createClient();

        $crawler = $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        // check the format of the response
        $this->assertArrayHasKey('id', $content[0]);
        $this->assertArrayHasKey('date_value', $content[0]);
        $this->assertArrayHasKey('reference', $content[0]);
        $this->assertArrayHasKey('name_value', $content[0]);
        $this->assertArrayHasKey('speed', $content[0]);
        $this->assertArrayHasKey('is_hazardous', $content[0]);

    }


    // Test API 4 /neo/fastest?hazardous=true

    public function testApiFastest(){


        $url = '/neo/fastest?hazardous=true';

        $client = static::createClient();

        $crawler = $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        // check the format of the response
        $this->assertArrayHasKey('id', $content);
        $this->assertArrayHasKey('date_value', $content);
        $this->assertArrayHasKey('reference', $content);
        $this->assertArrayHasKey('name_value', $content);
        $this->assertArrayHasKey('speed', $content);
        $this->assertArrayHasKey('is_hazardous', $content);

    }



    // Test API 5 /neo/best-year?hazardous=true

    public function testApiBestYear(){

        $url = '/neo/best-year?hazardous=true';

        $client = static::createClient();

        $crawler = $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        // check the format of the response
        $this->assertArrayHasKey('best_year', $content);

        $this->assertTrue(isset($content['best_year']));

        $this->assertTrue(is_int((int)$content['best_year']));

    }



    // Test API 6 /neo/best-month?hazardous=true

    public function testApiBestMonth(){

        $url = '/neo/best-month?hazardous=true';

        $client = static::createClient();

        $crawler = $client->request('GET', $url);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        // check the format of the response
        $this->assertArrayHasKey('count_neo', $content);
        $this->assertArrayHasKey('best_month', $content);
        $this->assertArrayHasKey('name_month', $content);

        $this->assertTrue(is_int((int)$content['best_month']));

    }








}
