<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{

    protected $routes = [
        '/admin',
        '/',
        '/shop',
        '/cart',
        '/checkout',
        '/contact',
        '/account/signin',
        '/account/signup',
    ];

    public function testRoutes(): void
    {

        foreach($this->routes as $route){

            $response = $this->get($route);

            $response->assertStatus(200);
        }
    }
}
