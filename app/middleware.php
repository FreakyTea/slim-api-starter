<?php

/* Application Middleware
–––––––––––––––––––––––––––––––––––––––*/
// CORS
$app->add(function ($request, $response, $next) {
    $resp = $next($request, $response);
    return $resp
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, PUT, DELETE')
        ->withHeader('Access-Control-Max-Age', 86400)
        ->withHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');
});
