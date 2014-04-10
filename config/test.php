<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// include the prod configuration
require __DIR__.'/dev.php';

// disable the debug mode
$app['debug'] = false;

// use session optimized for testing
$app['session.test'] = true;
