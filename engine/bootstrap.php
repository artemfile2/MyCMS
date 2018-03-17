<?php

require_once __DIR__.'/../vendor/autoload.php';

use Engine\DI\Di;
use Engine\Cms;

try {
    //create dependency injection
    $di = new Di();

    $services = require __DIR__ . '/Config/Service.php';

    // init service
    foreach ($services as $service){

        $provider = new $service($di);
        $provider->init();

    }

    //give di to CMS
    $cms = new Cms($di);
    $cms->run();

}catch (\ErrorException $e){
    echo $e->getMessage();
}