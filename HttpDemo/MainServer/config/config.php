<?php

use Imi\Log\LogLevel;
return [
	'configs'	=>	[
		'aop'		=>	__DIR__ . '/aop.php',
		'route'		=>	__DIR__ . '/route.php',
	],
	// bean扫描目录
	'beanScan'	=>	[
		'ImiDemo\HttpDemo\MainServer\Controller',
		'ImiDemo\HttpDemo\MainServer\Listener',
		'ImiDemo\HttpDemo\MainServer\Model',
		'ImiDemo\HttpDemo\MainServer\Aspect',
	],
	'beans'	=>	[
		'HtmlView'	=>	[
			'templatePath'	=>	dirname(__DIR__) . '/template/',
		],
		'Log'	=>	[
			// 'coreHandlers'	=>	[],
			'exHandlers'	=>	[
				[
					'class'		=>	\Imi\Log\Handler\File::class,
					'options'	=>	[
						'levels'	=>	LogLevel::ALL,
						'fileName'	=>	dirname(__DIR__, 3) . '/log.log',
					],
				]
			],
		],
		'SessionManager'	=>	[
			'handlerClass'	=>	\Imi\Server\Session\Handler\File::class,
		],
		'SessionConfig'	=>	[

		],
		'SessionCookie'	=>	[
			'lifetime'	=>	86400 * 30,
		],
		"SessionFile"	=>	[
			'savePath'	=>	dirname(__DIR__, 3) . '/session',
		],
		'SessionRedis'	=>	[
			'poolName'	=>	'redis'
		],
		'HttpDispatcher'	=>	[
			'middlewares'	=>	[
				\Imi\Server\Session\Middleware\HttpSessionMiddleware::class,
				\Imi\Server\Http\Middleware\RouteMiddleware::class,
			],
		],
		'View'	=>	[
			'data'	=>	[
				// 这里可以设置视图默认带的数据
			],
		],
	],
];