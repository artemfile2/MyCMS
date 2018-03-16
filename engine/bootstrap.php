<?php

require_once __DIR__.'/../vendor/autoload.php';

use engine\DI\Di;
use engine\Cms;

try {
    //create dependency injection
    $di = new Di();

    //give di to CMS
    $cms = new Cms($di);
    $cms->run();

}catch (\ErrorException $e){
    echo $e->getMessage();
}