<?php
namespace Pooph;

class Response
{
    function create($statusCode = 200) {
        return [
            'headers' => [
                'HTTP/1.1 ' . $statusCode
            ],
            'body' => ''
        ];
    }

    function set_header(array $response, $header)
    {
        $response['headers'][] = $header;

        return $response;
    }

    function set_body(array $response, string $body)
    {
        $response['body'] = $body;
        return $response;
    }

    function send(array $response)
    {
        array_walk($response['headers'], 'header');
        echo $response['body'];
    }
}