<?php
namespace Pooph;

class Router
{
    function routes() { return []; }
    function add($method, $route, callable $handler, array $routes = [])
    {
        if(!array_key_exists($method, $routes)) {
            $routes[$method] = [];
        }

        $routes[$method][$route] = $handler;

        return $routes;
    }

    function match(array $request, array $routes)
    {
        $uri = $request['uri'];
        $method = $request['method'];

        if(!array_key_exists($method, $routes)) {
            return function($request) { return Response::create(405); };
        }

        if(!array_key_exists($uri, $routes[$method])) {
            return function($request) { return Response::create(404); };
        }


        return $routes[$method][$uri];
    }
}