<?php

use Imi\Log\LogLevel;
return [
    'configs'    =>    [
    ],
    // bean扫描目录
    'beanScan'    =>    [
        'ImiApp\ApiServer\Controller',
        'ImiApp\Modules',
    ],
    'beans'    =>    [
        'SessionManager'    =>    [
            'handlerClass'    =>    \Imi\Server\Session\Handler\Redis::class,
        ],
        'SessionConfig'    =>    [

        ],
        'SessionCookie'    =>    [
            'lifetime'    =>    86400 * 30,
        ],
        'SessionRedis'    =>    [
            'poolName'              => 'redisSession',
            'formatHandlerClass'    => \Imi\Util\Format\Json::class,
            'keyPrefix'             => 'session:',
        ],
        'HttpDispatcher'    =>    [
            'middlewares'    =>    [
                \Imi\Server\Session\Middleware\HttpSessionMiddleware::class,
                \Imi\Server\Http\Middleware\RouteMiddleware::class,
            ],
        ],
    ],
];