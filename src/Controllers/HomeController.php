<?php

namespace App\Controllers;

use Cydran\Http\Request;
use Cydran\Http\Response;

class HomeController
{
    public function index(): Response
    {
        $content = '<a href="/post/11">PostController</a>';
        return new Response($content);
    }
}