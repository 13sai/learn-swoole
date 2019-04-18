<?php
/**
 * author: 13sai
 */
$server = new Swoole\WebSocket\Server("0.0.0.0", 9510);

$server->on('open', function (Swoole\WebSocket\Server $server, $request) {
    echo "server: handshake success with fd{$request->fd}\n";
});

$server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
    echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
    list($name, $msg) = explode(':', $frame->data);
    $server->push($frame->fd, "this is server, {$name} said {$msg}");
});

$server->on('close', function ($ser, $fd) {
    echo "client {$fd} closed\n";
});

$server->start();