<?php

namespace App;

use App\Views\ViewLoader;

class App
{
    private ViewLoader $viewLoader;
    private Router $router;

    public function __construct()
    {
        $this->viewLoader = new ViewLoader();
        $this->router = new Router();
    }

    public function run(): void
    {
        session_start();
        // Main URI
        $uri = $_SERVER['REQUEST_URI'];

        // Loading Header
        $this->viewLoader->load('Base/header');

        // Load page dinamically
        $this->viewLoader->load(
            $this->router->handle($uri)
        );

        // Loading Footer
        $this->viewLoader->load('Base/footer');
    }
}