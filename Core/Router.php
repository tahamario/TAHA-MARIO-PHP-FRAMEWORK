<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    public static $routes = [];

    protected static function add($uri, $method, $controller)
    {
        static::$routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller,
            'middleware' => null
        ];
        return (new Router);
    }

    public static function get($uri, $controller)
    {
        return static::add($uri, 'GET', $controller);
    }

    public static function post($uri, $controller)
    {
        return static::add($uri, 'POST', $controller);
    }

    public static function delete($uri, $controller)
    {
        return static::add($uri, 'DELETE', $controller);
    }

    public static function patch($uri, $controller)
    {
        return static::add($uri, 'PATCH', $controller);
    }

    public static function put($uri, $controller)
    {
        return static::add($uri, 'PUT', $controller);
    }

    public function route($uri, $method)
    {
        foreach (static::$routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                Middleware::resolve($route['middleware']);

                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    public function abort($code = 404)
    {
        http_response_code($code);
        require base_path('/views/components/errors/' . $code . '.php');
        die();
    }

    public function only($key)
    {
        static::$routes[array_key_last(static::$routes)]['middleware'] = $key;
        return $this;
    }
}
