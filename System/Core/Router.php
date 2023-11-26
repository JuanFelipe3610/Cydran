<?php

namespace Cydran\Core;

class Router
{
    private array $routes = [];
    private string $uri;
    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->uri = explode('?', $this->uri)[0];
        $this->uri = rtrim($this->uri, '/');
    }

    public function add(string $method, string $route, string $controller): void
    {
        $route = rtrim($route, '/');
        $this->routes[$route] = $controller;
    }

    /**
     * @throws \Exception
     */
    public function run(): void
    {
        if (!key_exists($this->uri, $this->routes)) {
            throw new \Exception('Controller not found');
        }

        $controller = $this->routes[$this->uri];
        $controller = new $controller();
        $request = \Cydran\Http\Request::createFromGlobals();
        $controller->__invoke($request)->send();
    }
}