<?php

namespace Core;

class Router {
    protected $routes = [];
    protected $middlewares = [];

    public function route($method, $uri, $controller) {
        $this->routes[$method][$uri] = $controller;
    }

    public function addMiddleware($middleware) {
        $this->middlewares[] = $middleware;
    }

    public function dispatch($method, $uri) {
        $this->applyMiddlewares();

        if (!isset($this->routes[$method])) {
            throw new Exception("Invalid request method: $method");
        }

        foreach ($this->routes[$method] as $routeUri => $controller) {
            if ($this->matchUri($routeUri, $uri)) {
                $this->callController($controller);
                return;
            }
        }

        throw new Exception("Route not found for URI: $uri");
    }

    protected function applyMiddlewares() {
        foreach ($this->middlewares as $middleware) {
            $middleware();
        }
    }

    protected function matchUri($routeUri, $uri) {
        $routeParts = explode('/', $routeUri);
        $uriParts = explode('/', $uri);

        if (count($routeParts) !== count($uriParts)) {
            return false;
        }

        for ($i = 0; $i < count($routeParts); $i++) {
            if ($routeParts[$i] === $uriParts[$i]) {
                continue;
            }

            if (strpos($routeParts[$i], '{') !== false && strpos($routeParts[$i], '}') !== false) {
                continue;
            }

            return false;
        }

        return true;
    }

    protected function callController($controller) {
        list($className, $methodName) = explode('@', $controller);

        if (!class_exists($className)) {
            throw new Exception("Controller class not found: $className");
        }

        $instance = new $className();

        if (!method_exists($instance, $methodName)) {
            throw new Exception("Controller method not found: $methodName");
        }

        $instance->$methodName();
    }
}
//$router = new Router();
//
//$router->addRoute('GET', '/users', 'UserController@index');
//$router->addRoute('POST', '/users', 'UserController@store');

//$router->addMiddleware(function() {
//    // Perform some middleware logic
//});

//try {
//    $router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
//} catch (Exception $e) {
//    // Handle exceptions thrown by the router
//}

