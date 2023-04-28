<?php

namespace Core;

class Router {

    protected $routes = [];

    public function get($uri, $controller, $method_name = 'index', $middlewares = null) {
        if ($middlewares != null) {
            //middlewares applied
        } else {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => 'GET',
                'method_name' => $method_name,
                'middlewares' => $middlewares
            ];
        }
    }

    public function post($uri, $controller, $method_name = 'store', $middlewares = null) {
        if ($middlewares != null) {
            //middlewares applied
        } else {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => 'POST',
                'method_name' => $method_name,
                'middlewares' => $middlewares
            ];
        }
    }
    public function route($url, $method = 'GET') {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $url && $route['method'] === $method) {
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
        abort(404);
    }



}
