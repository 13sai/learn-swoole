# Swoole是什么

标签（空格分隔）： swoole

---
Swoole:面向生产环境的 PHP 异步网络通信引擎

Swoole是PHP协程高性能网络通信引擎，使用C/C++语言编写，提供了多种通信协议的网络服务器和客户端模块。包括：

 - TCP/UDP/UnixSocket服务器 
 - Http/WebSocket/Http2.0服务器端 
 - 异步/同步TCP/UDP网络客户端
 - 异步MySQL 
 - 异步Redis AsyncTask 
 - 毫秒定时器 
 - 异步文件读写 
 - 异步DNS查询 
 - Http客户端

Swoole4支持完整的协程编程模式，可以使用完全同步的代码实现异步程序。PHP代码无需额外增加任何关键词，底层自动进行协程调度，实现异步IO。

> Swoole4协程仅支持PHP7，无法在PHP5中使用。
推荐使用PHP7+Swoole4.x。


Swoole的特点：
异步并发高性能

应用场景：
Swoole 可以广泛应用于互联网、移动通信、企业软件、云计算、网络游戏、物联网（IOT）、车联网、智能家居等领域。 


学习Swoole需要的知识：
> https://wiki.swoole.com/wiki/page/487.html




