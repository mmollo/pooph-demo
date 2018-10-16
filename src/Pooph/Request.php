<?php
namespace Pooph;

class Request
{
    function import()
    {
        return [
            'uri' => $_SERVER['REQUEST_URI'],
            'method' => $_SERVER['REQUEST_METHOD']
        ];
    }
}