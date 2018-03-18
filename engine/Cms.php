<?php

namespace Engine;

use Engine\Helpers\Common;

class Cms
{
    /**
     * @var Di
     * @var router
     */
    private $di;
    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->getContainer('router');
    }

    /**
     * Run CMS
     */
    public function run()
    {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/12', 'ProductController:index');

        $routerDispatch = $this->router
            ->Dispatch(Common::getMethod(), Common::getPathUrl());

        //echo var_dump($this->di);
        echo '<br>';
        echo print_r($routerDispatch);
    }
}