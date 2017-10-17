<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/list/voucher/?email=albert@gmail.com');

        var_dump($client->getResponse()->getStatusCode());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        $content = json_decode($client->getResponse()->getContent(), true);


        $this->assertArrayHasKey('id', $content[0]);
        $this->assertArrayHasKey('idRecipient', $content[0]);
        $this->assertArrayHasKey('idVoucher', $content[0]);
        $this->assertArrayHasKey('offer', $content[0]);
        $this->assertArrayHasKey('code', $content[0]);

        //$this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }


    public function testValidRecipientIndex(){

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/list/voucher/?email=albert@gmail.com');

        var_dump($client->getResponse()->getStatusCode());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        $content = json_decode($client->getResponse()->getContent(), true);


        $this->assertArrayNotHasKey('isd', $content[0]);



    }


    public function testListRecipientIndex(){

        //$controller = new DefaultController();

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/recipient/list/');

        var_dump($client->getResponse()->getStatusCode());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $controller = new \AppBundle\Controller\DefaultController();

        $response = $controller->voucherListAction();

        $string = 'test voucher';

        $this->assertEquals($string, $response);


    }
}
