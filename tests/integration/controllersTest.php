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

    public function testFooBar()
    {
        $this->markTestIncomplete();
    }
}