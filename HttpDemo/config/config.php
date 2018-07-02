<?php
use Imi\Server\Type;

// 注释项代表可省略的，使用默认值
return [
	// 项目根命名空间
	'namespace'	=>	'ImiDemo\HttpDemo',
	// 扫描目录
	'beanScan'	=>	[
		'ImiDemo\HttpDemo\Listener',
	],
	// 主服务器配置
	'mainServer'	=>	[
		'namespace'	=>	'ImiDemo\HttpDemo\MainServer',
		'type'		=>	Type::HTTP,
		// 'host'		=>	'0.0.0.0',
		'port'		=>	8080,
		// 'mode'		=>	SWOOLE_BASE,
		// 'sockType'	=>	SWOOLE_SOCK_TCP,
		'configs'	=>	[
			'reactor_num'		=>	2,
			'worker_num'		=>	2,
			'task_worker_num'	=>	8,
		],
	],
	// 子服务器（端口监听）配置
	'subServers'		=>	[
		// 子服务器名
		// 'second'	=>	[
		// 	'namespace'	=>	'ImiDemo\HttpDemo\HttpSecond',
		// 	'type'		=>	Type::HTTP,
		// 	// 'host'		=>	'0.0.0.0',
		// 	'port'		=>	8081,
		// 	// 'mode'		=>	SWOOLE_PROCESS,
		// 	// 'sockType'	=>	SWOOLE_SOCK_TCP,
		// ]
	],
	// 配置文件
	'configs'	=>	[
		'beans'		=>	__DIR__ . '/beans.php',
	],
	'db'	=>	[
		// 数据库默认连接池名
		'defaultPool'	=>	'maindb',
	],
	'pools'	=>	[
		// 数据库连接池名：maindb
		// 'maindb'	=>	[
		// 	// 同步池子，task进程使用
		// 	'sync'	=>	[
		// 		'pool'	=>	[
		// 			'class'		=>	\Imi\Db\Pool\SyncDbPool::class,
		// 			'config'	=>	[
		// 				'maxResources'	=>	5,
		// 				'minResources'	=>	0,
		// 			],
		// 		],
		// 		'resource'	=>	[
		// 			'dbClass'	=> \Imi\Db\Drivers\PdoMysql\Driver::class,
		// 			'host'		=> '127.0.0.1',
		// 			'user'		=> 'root',
		// 			'password'	=> 'root',
		// 			'database'	=> 'db_test',
		// 		],
		// 	],
		// 	// 异步池子，worker进程使用
		// 	'async'	=>	[
		// 		'pool'	=>	[
		// 			'class'		=>	\Imi\Db\Pool\CoroutineDbPool::class,
		// 			'config'	=>	[
		// 				'maxResources'	=>	5
		// 			],
		// 		],
		// 		'resource'	=>	[
		// 			'dbClass'	=> \Imi\Db\Drivers\CoroutineMysql\Driver::class,
		// 			'host'		=> '127.0.0.1',
		// 			'user'		=> 'root',
		// 			'password'	=> 'root',
		// 			'database'	=> 'db_test',
		// 		],
		// 	]
		// ],
		// 'redis'	=>	[
		// 	'sync'	=>	[
		// 		'pool'	=>	[
		// 			'class'		=>	\Imi\Redis\SyncRedisPool::class,
		// 			'config'	=>	[
		// 				'maxResources'	=>	5,
		// 				'minResources'	=>	1,
		// 			],
		// 		],
		// 		'resource'	=>	[
		// 			// 密码
		// 			// 'password'	=>	'',
		// 			// 第几个库
		// 			// 'db'	=>	0,
		// 		]
		// 	],
		// 	'async'	=>	[
		// 		'pool'	=>	[
		// 			'class'		=>	\Imi\Redis\CoroutineRedisPool::class,
		// 			'config'	=>	[
		// 				'maxResources'	=>	5,
		// 				'minResources'	=>	1,
		// 			],
		// 		],
		// 		'resource'	=>	[
		// 			// 密码
		// 			// 'password'	=>	'',
		// 			// 第几个库
		// 			// 'db'	=>	0,
		// 		]
		// 	],
		// ],
	],
	'caches'	=>	[
		// 文件缓存
		// 'f1'	=>	[
		// 	'handlerClass'	=>	\Imi\Cache\Handler\File::class,
		// 	'option'		=>	[
		// 		'savePath'	=>	dirname(__DIR__, 3) . '/cache',
		// 	],
		// ],
		// // redis缓存
		// 'r1'	=>	[
		// 	'handlerClass'	=>	\Imi\Cache\Handler\Redis::class,
		// 	'option'		=>	[
		// 		'poolName'	=>	'redis',
		// 	],
		// ],
	],
];