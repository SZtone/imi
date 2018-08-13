<?php

use Imi\RequestContext;
use Imi\Controller\HttpController;
use Imi\Server\Route\RouteCallable;

class Test extends HttpController
{
	public function abc()
	{
		return $this->response->write('callback2');
	}
}
return [
	// [
	// 	'controller'	=>	\ImiDemo\HttpDemo\MainServer\Controller\Test::class,
	// 	'method'		=>	'index',
	// 	'route'	=>	[
	// 		'url'	=>	'/test',
	// 		// 'method'	=>	'PUT',
	// 		// 'method'	=>	['GET', 'POST'],
	// 		// 'domain'	=>	'{name}.xxx.com',
	// 	],
	// ],
	// [
	// 	'route'	=>	[
	// 		'url'	=>	'/callback1',
	// 	],
	// 	'callback'	=>	function(){
	// 		return RequestContext::get('response')->write('callback1');
	// 	},
	// ],
	// [
	// 	'route'	=>	[
	// 		'url'	=>	'/callback2',
	// 	],
	// 	'callback'	=>	new RouteCallable('\Test', 'abc'),
	// ],
	// [
	// 	'controller'	=>	'\ImiDemo\HttpDemo\MainServer\Controller\Test{$interface}',
	// 	'method'		=>	'{$interface}',
	// 	'route'	=>	[
	// 		'url'	=>	'/test/{interface}',
	// 	],
	// ],
	// [
	// 	'controller'	=>	\ImiDemo\HttpDemo\MainServer\Controller\Test::class,
	// 	'method'		=>	'{$interface}',
	// 	'route'	=>	[
	// 		'url'	=>	'/{interface}',
	// 	],
	// ],
];