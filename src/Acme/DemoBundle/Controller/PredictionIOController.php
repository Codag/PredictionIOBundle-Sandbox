<?php
/*
 * This file is part of the Resio package.
 *
 * (c) Marc Juchli <mail@marcjuch.li>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\DemoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PredictionIOController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $client = $this->get('predictionio')->getClient();
        var_dump($client);

        return array();
    }
} 