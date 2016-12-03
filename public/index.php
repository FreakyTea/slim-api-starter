<?php
// Bootstrap Dependencies and setup the DI Container
require __DIR__.'/../app/bootstrap.php';

// Instantiate the app
$app = new \Slim\App($container);

// Register middleware
require __DIR__.'/../app/middleware.php';

// Register routes
require __DIR__.'/../app/routes.php';

// Run!
$app->run();
