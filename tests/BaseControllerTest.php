<?php

namespace Tests;

use Slim\App;
use Slim\Http\Environment;
use Slim\Http\Request;
use Slim\Http\Response;

abstract class BaseControllerTest extends \PHPUnit_Framework_TestCase
{
    protected function makeRequest($method, $uri)
    {
        // Create Slim Environment
        $environment = Environment::mock([
            'REQUEST_METHOD' => $method,
            'REQUEST_URI' => $uri
        ]);

        // Create Slim Request and Response
        $request = Request::createFromEnvironment($environment);
        $response = new Response();

        // Setup the App as per public/index.php
        require __DIR__.'/../app/bootstrap.php';
        $app = new App($container);
        require __DIR__.'/../app/middleware.php';
        require __DIR__.'/../app/routes.php';

        // Return processed request
        return $app->process($request, $response);
    }
}
