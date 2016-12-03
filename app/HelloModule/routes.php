<?php

// GET /hello
// GET /hello/{name}
$app->group('/hello', function () use ($app) {
    $ctrl = 'App\HelloModule\API\HelloController:';

    $app->get('', $ctrl.'getHello');
    $app->get('/{name:\w*}', $ctrl.'getHello');
});
