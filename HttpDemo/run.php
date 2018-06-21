<?php
namespace ImiDemo\HttpDemo;

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Imi\App;

App::setDebug(true);
App::run('ImiDemo\HttpDemo');
