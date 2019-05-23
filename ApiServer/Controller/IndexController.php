<?php
namespace ImiApp\ApiServer\Controller;

use Imi\Aop\Annotation\Inject;
use Imi\Controller\HttpController;
use Imi\Server\Route\Annotation\Route;
use Imi\Server\Route\Annotation\Action;
use Imi\Server\Route\Annotation\Controller;

/**
 * @Controller
 */
class IndexController extends HttpController
{
    /**
     * @Inject("TestService")
     *
     * @var \ImiApp\Modules\Test\Service\TestService
     */
    protected $testService;

    /**
     * @Action
     * @Route("/")
     *
     * @return void
     */
    public function index()
    {
        $time = time();
        return [
            'time'  =>  $time,
            'data'  =>  $this->testService->test($time),
        ];
    }

}
