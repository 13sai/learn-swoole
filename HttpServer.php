<?php
/**
 * User: 13sai
 * Date: 2019/4/17
 * Time: 15:16
 */

$http = new Swoole\Http\Server('127.0.0.1', 9506);

$http->on('request', function (swoole_http_request $request, swoole_http_response $response) {
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http->start();