<?php

namespace Cydran\Core;

use App\Controllers\PostController;
use App\Controllers\HomeController;

class App
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run(): void
    {
        $this->router->add('GET', '/', HomeController::class);
        $this->router->add('GET', '/dashboard', PostController::class);
        try {
            $this->router->run();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}