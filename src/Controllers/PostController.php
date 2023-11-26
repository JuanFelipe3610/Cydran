<?php

namespace App\Controllers;

use Cydran\Http\Response;

class PostController
{
    private array $post = [
        11 => [
            'title' => 'PostController 11',
            'content' => 'PostController 11 content'
        ],
        22 => [
            'title' => 'PostController 22',
            'content' => 'PostController 22 content'
        ]
    ];
    public function index(): Response
    {
        $content = <<<HTML
            <h1>PostController</h1>
            <ul>
                <li><a href="/post/11">PostController 11</a></li>
                <li><a href="/post/22">PostController 22</a></li>
            </ul>
            <a href="/">Inicio</a>
        HTML;
        return new Response($content);
    }

    public function show(int $id): Response
    {
        $content = <<<HTML
            <h1>{$this->post[$id]['title']}</h1>
            <p>{$this->post[$id]['content']}</p>
            <a href="/post">Atras</a>
        HTML;
        return new Response($content);
    }
}