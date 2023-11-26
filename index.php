<?php

use Cydran\Http\Kernel;
use Cydran\Http\Request;

define('BASE_PATH', dirname(__DIR__.'/Cydran'));

require_once dirname(__DIR__) . '/Cydran/vendor/autoload.php';

$request = Request::createFromGlobals();
$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();
