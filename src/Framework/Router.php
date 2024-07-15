<?php

namespace Framework;

class Router
{
    private array $routers = [];

    public function add(string $path, array $params): void
    {
        $this->routers[] = [
            "path" => $path,
            "params" => $params
        ];
    }

    public function match(string $path): array|bool
    {
        foreach ($this->routers as $route) {
            if($route["path"] === $path) {
                return $route["params"];
            }
        }

        return false;
    }
}