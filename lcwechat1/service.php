<?php

require_once __DIR__ . '/./vendor/autoload.php';

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

//关注事件
Kernel::register(Receive::TYPE_EVENT_SUBSCRIBE, function (WechatEvent $event) {
    $event->setResponse('你关注或是不关注，我都在这里，不悲不喜~~');
    $event->stopPropagation();
});

//处理微信服务器的请求
$response = Kernel::handle();

echo $response;