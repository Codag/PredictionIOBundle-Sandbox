<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PredictionIOControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        //$client = static::createClient(array(), array('HTTP_HOST' => 'predictionio.local'));
        //$client->followRedirects(true);

        $crawler = $client->request('GET', '/predictionio');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("PredictionIO\PredictionIOClient")')->count()
        );
    }
}
