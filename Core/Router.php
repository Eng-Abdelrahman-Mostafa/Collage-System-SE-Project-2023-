<?php

namespace Core;

use app\http\Controllers\Controller;
use app\http\Middlewares\Middlewares_Provider;


class Router {

    protected $routes = [];

    public function get($uri, $controller, $method_name = 'index', $middlewares = null) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET',
            'method_name' => $method_name,
            'middlewares' => $middlewares
        ];
    }

    public function post($uri, $controller, $method_name = 'store', $middlewares = null) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST',
            'method_name' => $method_name,
            'middlewares' => $middlewares
        ];
    }
    public function route($url, $method = 'GET') {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $url && $route['method'] === strtoupper($method)) {
                if ($route['middlewares'] !== null) {
//                    $middlewares = explode('|', $route['middlewares']);
                    $middlewares = $route['middlewares'];
                    foreach ($middlewares as $middleware) {
                        $middleware = Middlewares_Provider::MAP[$middleware];
                        $middleware = new $middleware();
                        $middleware->handle();
                    }
                }
                $controller = require base_path($route['controller']);
                if (!is_object($controller)) {
                    abort(500, "Controller is not an object");
                }
                $method_name = $route['method_name'];
                if (!method_exists($controller, $method_name)) {
                    abort(500, "Method not found in controller");
                }
                return $controller->$method_name();
            }
        }
//        dd($this->routes);
        abort(404);
    }

}
