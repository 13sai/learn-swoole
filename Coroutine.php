<?php

/**
 * author: 13sai
 * 协程通信
 */

function test1()
{
    sleep(3);
    echo 'test1';
}

function test2()
{
    sleep(2);
    echo 'test2';
}

test1();
test2();


Swoole\Runtime::enableCoroutine();

$t = time();

go(function () use ($t){
    sleep(6);
    echo time() - $t;
    echo 'a';
});

go(function () use ($t){
    sleep(3);
    echo time() - $t;
    echo 'b';
});