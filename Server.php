<?php
/**
 * User: 13sai
 * Date: 2019/4/17
 * Time: 15:16
 */

function onConnect()
{
    echo "welcome\r\n";
}

function onReceive($serv, $fd, $id, $data)
{
    echo "{$fd}发来消息:$data\r\n";
    $serv->send($fd, 'you said:'.$data);
}

function onClose()
{
    echo "bye\r\n";
}
// 构建Server对象
$server = new Swoole\Server('0.0.0.0', 9505, SWOOLE_BASE, SWOOLE_SOCK_TCP);

$server->set([
    'worker_num' => 4,
    'daemonize' => false,
    'backlog' => 128,
]);

// 注册事件回调函数（）
$server->on('Connect', 'onConnect');
$server->on('Receive', 'onReceive');
$server->on('Close', 'onClose');

// 启动服务器
$server->start();