<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PredictionIOControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        //$client = static::createClient(array(), array('HTTP_HOST' => 'predictionio.local'));
<<<<<<< HEAD
        //$client->followRedirects(true);
=======
        $client->followRedirects(true);
>>>>>>> release/1.1.0

        $crawler = $client->request('GET', '/predictionio');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("PredictionIO\PredictionIOClient")')->count()
        );
    }
}
