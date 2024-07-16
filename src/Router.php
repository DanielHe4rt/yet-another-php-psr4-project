<?php

namespace App;

class Router
{
    public function handle(string $uri): string
    {
        $path = 'Pages/home';

        if ($uri == '/') {
            return $path;
        }
        // /seo/123123
        $uriParameters = $this->getUriParameters($uri);
        $uri = array_shift($uriParameters); // get the first argument

        if (count($uriParameters) > 0) {
            $_SESSION['arguments'] = $uriParameters;
        }

        return match ($uri) {
            'seo' => 'Pages/seo',
            'posts' => 'Pages/posts',
            default => 'Pages/404'
        };
    }


    private function getUriParameters(string $uri): array
    {
        $uriPieces = explode('/', $uri);
        array_shift($uriPieces);
        return $uriPieces; // Remove first slash
    }
}