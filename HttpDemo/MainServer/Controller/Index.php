<?php
namespace ImiDemo\HttpDemo\MainServer\Controller;

use Imi\Controller\HttpController;
use Imi\Server\View\Annotation\View;
use Imi\Server\Route\Annotation\Route;
use Imi\Server\Route\Annotation\Action;
use Imi\Server\Route\Annotation\Controller;

/**
 * 演示
 * @Controller("/Index/")
 */
class Index extends HttpController
{
	/**
	 * PHP 原生模版引擎演示
	 * 访问：http://127.0.0.1:8080/
	 * 
	 * @Action
	 * @Route(url="/")
	 * @View(template="Index/index")
	 * @return void
	 */
	public function index()
	{
		return [
			'title'		=>	'hello imi',
			'content'	=>	'imi is very six',
		];
	}

	/**
	 * api 演示
	 * 访问：http://127.0.0.1:8080/Index/api
	 * 
	 * @Action
	 * @Route(url="api")
	 * @View(renderType="json")
	 * @return void
	 */
	public function api()
	{
		return [
			'id'	=>	1,
			'name'	=>	'imi',
		];
	}

	/**
	 * GET/POST参数 演示
	 * 访问：http://127.0.0.1:8080/Index/params?id=123&name=imi
	 * 
	 * @Action
	 * @Route(url="params")
	 * @View(renderType="json")
	 * @return void
	 */
	public function params($id)
	{
		return [
			'id'		=>	$id,
			'name'		=>	$this->request->get('name', 'default'),
			'getParams'	=>	$this->request->get(),
			'postParams'=>	$this->request->post(),
		];
	}
}