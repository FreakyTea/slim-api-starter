<?php

require_once __DIR__.'/../vendor/autoload.php';

use Dotenv\Dotenv;
use Slim\Container;

/* Dotenv, yay!
–––––––––––––––––––––––––––––––––––––––*/
$dotenv = new Dotenv(__DIR__.'/../');
$dotenv->load();

// required environment variables
$dotenv->required([
    'DEBUG'
]);

/* Set the Timezone
–––––––––––––––––––––––––––––––––––––––*/
$timezone = getenv('TIMEZONE') ?: 'Europe/Berlin';
$timezone_set = date_default_timezone_set($timezone);

/* Setup Dependency Injection Container
–––––––––––––––––––––––––––––––––––––––*/
$settings = require __DIR__.'/settings.php';
$container = new Container($settings);

// Set up dependencies
require __DIR__.'/dependencies.php';
