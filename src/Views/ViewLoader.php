<?php

namespace App\Views;

class ViewLoader
{

    public function load(string $viewPath): void
    {
        $viewDirectory = $this->getViewPath($viewPath);

        $viewDirectory = match (file_exists($viewDirectory)) {
            true => $viewDirectory,
            false => $this->getViewPath('404')
        };

        require $viewDirectory;
    }

    private function getViewPath(string $viewPath): string
    {
        return __DIR__ . '/Resources/' . $viewPath . ".php";
    }
}