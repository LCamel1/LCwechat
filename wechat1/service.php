<?php

// Path to the front controller (this file)
define('BASEPATH', str_replace(strrchr(trim(__DIR__, '/'), '/'), '', __DIR__));


require_once BASEPATH . "/vendor/autoload.php";

use PFinal\Wechat\Kernel;
use PFinal\Wechat\Message\Receive;
use PFinal\Wechat\Message;
use PFinal\Wechat\WechatEvent;
use PFinal\Wechat\Support\Log;

//配置项 
$config = require __DIR__ . '/config-local.php';

Kernel::init($config);

//初始化
Kernel::init($config);

//消息处理
Kernel::register(Receive::TYPE_TEXT, function (WechatEvent $event) {
    $message = $event->getMessage();
    $event->setResponse('你好');
    $event->stopPropagation();
});


//处理微信服务器的请求
$response = Kernel::handle();

echo $response;