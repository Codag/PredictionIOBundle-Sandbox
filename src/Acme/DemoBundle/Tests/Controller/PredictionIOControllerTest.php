<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/predictionio');

        $this->assertTrue($crawler->filter('html:contains("Codag\PredictionIOClient")')->count() > 0);
    }
}
