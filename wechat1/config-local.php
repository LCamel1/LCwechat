<?php
return array(

    //公众平台 https://mp.weixin.qq.com
    'appId' => 'wx7c37ca114fdf169b',
    'appSecret' => '80931781392d99454fdbf9cf86ba649e',
    'token' => 'lcamel',
    'encodingAesKey' => 'I9ZfsIRrZ5FiefMIDcAt6VTmjrYMGALyWEyzcRfM8SH',
    'middleUrl' => null,         //此参数默认为null即可

    //微信支付 https://pay.weixin.qq.com
    'mchId' => 'xxx',
    'apiSecret' => 'xxx', // 在这里设置 https://pay.weixin.qq.com 帐户设置-安全设置-API安全-API密钥-设置API密钥
    'sslCert' => '/data/cert/apiclient_cert.pem', //发红包等功能需要配置证书，根据实际情况配置，只是在线收款，不需要证书
    'sslKey' => '/data/cert/apiclient_key.pem',
    'caInfo' => '/data/cert/rootca.pem',

    //日志
    'log' => array(
        'class' => 'PFinal\Wechat\Support\Logger',
        'name' => 'pfinal.wechat',
        'level' => Monolog\Logger::DEBUG,
        'file' => './log/wechat.log',
    ),

    //会话
    'session' => array(
        'class' => 'PFinal\Session\NativeSession',
        'keyPrefix' => 'pfinal.wechat',
    ),

    //缓存
    'cache' => array(
        'class' => 'PFinal\Cache\FileCache',
        'keyPrefix' => 'pfinal.wechat',
        'cachePath' => './cache',
    ),
);