<?php

namespace Engine;

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
        //echo var_dump($this->di);
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/{id}', 'ProductController:index');
        echo var_dump($this->di);
    }
}