<?php

namespace Tests\HelloModule\API;

use Tests\BaseControllerTest;

final class HelloControllerTest extends BaseControllerTest
{
    /**
     * Test that GET /hello responds with Hello World!
     */
    public function testHelloRespondsWithWorld()
    {
        $response = $this->makeRequest('GET', '/hello');
        $body = json_decode((string)$response->getBody(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(array_key_exists('msg', $body));
        $this->assertEquals('Hello World!', $body['msg']);
    }

    /**
     * Test that GET /hello/ responds with Hello World!
     */
    public function testHelloEmptyNameRespondsWithWorld()
    {
        $response = $this->makeRequest('GET', '/hello/');
        $body = json_decode((string)$response->getBody(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(array_key_exists('msg', $body));
        $this->assertEquals('Hello World!', $body['msg']);
    }

    /**
     * Test that GET /hello/name responds with Hello name!
     */
    public function testHelloNameRespondsWithName()
    {
        $response = $this->makeRequest('GET', '/hello/name');
        $body = json_decode((string)$response->getBody(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(array_key_exists('msg', $body));
        $this->assertEquals('Hello name!', $body['msg']);
    }
}
