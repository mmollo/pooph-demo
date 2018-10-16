<?php
spl_autoload_register(function($name) {
    require __DIR__ . '/../src/' . $name . '.php';
});
use \Pooph\{Router,Request,Response};

$request = Request::import();

$routes = Router::add('GET', '/', ['PageController', 'index'], Router::routes());
$routes = Router::add('GET', '/hello', ['HelloController', 'index'], $routes);

Response::send(
    Router::match($request, $routes)($request, Response::create())
);