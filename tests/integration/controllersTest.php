<?php

use Silex\WebTestCase;

class controllersTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../../src/app.php';
        require __DIR__.'/../../config/test.php';
        require __DIR__.'/../../src/controllers.php';
        return $app;
    }

    /**
     * @group integration
     * @group home
     */
    public function testHome()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
    }

    /**
     * @group integration
     * @group home
     */
    public function test404()
    {
        $client = $this->createClient();

        $client->request('GET', '/give-me-a-404');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}