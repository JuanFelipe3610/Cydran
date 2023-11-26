<?php

namespace Cydran\Http;

readonly class Response
{
    public function __construct(
        private ?string $content,
        private int     $statusCode = 200,
        private array    $headers = []
    )
    {
    }

    public function send(): void
    {
        foreach ($this->headers as $header) header($header);
        http_response_code($this->statusCode);
        echo $this->content;
    }
}