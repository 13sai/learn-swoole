<?php

/**
 * author： 13sai
 * go关键字
 */

$chan = new chan(2);

go (function () use ($chan) {
   $ret = [];
   for ($i=0; $i< 2; $i++) {
       $ret += $chan->pop();
   }

   var_dump($ret);
});


# 协程2
go(function () use ($chan) {
    $cli = new Swoole\Coroutine\Http\Client('api.13sai.com', 80);
    $cli->set(['timeout' => 10]);
    $cli->setHeaders([
        'Host' => "api.13sai.com",
        'User-Agent' => 'Chrome/49.0.2587.3',
        'Accept' => 'text/html,application/xhtml+xml,application/xml',
        'Accept-Encoding' => 'gzip',
    ]);
    $ret = $cli->get('/');
    // $cli->body 响应内容过大，这里用 Http 状态码作为测试
    $chan->push(['api.13sai.com' => $cli->statusCode]);
});

# 协程3
go(function () use ($chan) {
    $cli = new Swoole\Coroutine\Http\Client('www.baidu.com', 80);
    $cli->set(['timeout' => 10]);
    $cli->setHeaders([
        'Host' => "www.baidu.com",
        'User-Agent' => 'Chrome/49.0.2587.3',
        'Accept' => 'text/html,application/xhtml+xml,application/xml',
        'Accept-Encoding' => 'gzip',
    ]);
    $ret = $cli->get('/');
    // $cli->body 响应内容过大，这里用 Http 状态码作为测试
    $chan->push(['www.baidu.com' => $cli->statusCode]);
});