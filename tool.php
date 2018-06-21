<?php
// 我是工具入口，通过php tool.php执行

require_once __DIR__ . '/vendor/autoload.php';

use Imi\App;

App::runTool('ImiDemo\HttpDemo');