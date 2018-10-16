<?php
use Pooph\Response;

class PageController{
    function index($request, $response)
    {
        $response = Response::set_body($response, '<html><title>Pooph</title><body><h1>An useless PHP MVC Framework</h1><a href="/hello">Hello</a></body></html>');
        return $response;
    }
}