<?php

use App\Controllers\HomeController;
use App\Controllers\PostController;

return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/post', [PostController::class, 'index']],
    ['GET', '/post/{id:\d+}', [PostController::class, 'show']]
];