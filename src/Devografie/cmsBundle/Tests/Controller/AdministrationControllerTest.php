<?php

namespace Devografie\cmsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrationControllerTest extends WebTestCase
{
    public function testIndexadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/indexadmin');
    }

}
