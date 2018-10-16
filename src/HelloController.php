<?php
use Pooph\Response;

class HelloController{
    function index($request, $response)
    {
        $response = Response::set_header($response, 'Content-Type', 'text/plain');
        $response = Response::set_body($response, "Hello");
        return $response;
    }
}