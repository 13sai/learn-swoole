<?php
/**
 * 同步阻塞
 * User: 13sai
 * Date: 2019/4/17
 * Time: 15:16
 */


$client = new Swoole\Client(SWOOLE_SOCK_TCP);

if (!$client->connect('127.0.0.1', 9505, -1)) {
    exit('connect fail!');
}

$client->send("wow!");
echo $client->recv();
$client->close();

