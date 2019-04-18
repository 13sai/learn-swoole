# 安装Swoole扩展



---

### 环境依赖：
- 仅支持 Linux、FreeBSD、MacOS 三种操作系统


### PHP版本依赖：
Swoole-1.x需要 PHP-5.3.10 或更高版本
Swoole-4.x需要 PHP-7.0.0 或更高版本（推荐使用此版本）
不依赖 PHP 的 stream、sockets、pcntl、posix、sysvmsg 等扩展。PHP 只需安装最基本的扩展即可
对PHP版本支持和PHP官方维护版本保持一致，参考PHP版本支持时间表
PHP-7.3 版本的 pcre.jit 存在 bug，可能会导致进程持续崩溃，请修改 php.ini 设置 pcre.jit=0

### 下载地址：



### 安装

方法一：源码安装

下载地址：
> https://github.com/swoole/swoole-src/releases

```
tar -zxvf swoole.x.x.x.tar.gz
cd swoole.x.x.x
phpize 
./configure
make 
sudo make install
```

方法二：

Swoole项目已收录到PHP官方扩展库，除了手工下载编译外，还可以通过PHP官方提供的pecl命令，一键下载安装

> pecl install swoole

安装成功后，修改php.ini加入

> extension=swoole.so


查看

> php -m  查看安装的swoole扩展


### 文档推荐：

> https://wiki.swoole.com/
> https://linkeddestiny.gitbooks.io/easy-swoole/content/







