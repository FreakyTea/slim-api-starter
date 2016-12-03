<?php

namespace App\HelloModule\API;

final class HelloController
{
    public function getHello($request, $response, $args)
    {
        $name = array_key_exists('name', $args)
            ? $args['name']
            : '';
        $name = $name ?: 'World';

        $body = [ 'msg' => "Hello {$name}!" ];

        return $response->withJson($body);
    }
}
