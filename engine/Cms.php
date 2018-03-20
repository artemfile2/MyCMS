<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
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
        try {
            $this->router->add('home', '/', 'HomeController:index');
            $this->router->add('product', '/product/12', 'HomeController:product');
            $this->router->add('product_alias', '/product/all/(id:int)', 'ProductController:products');

            $routerDispatch = $this->router
                ->Dispatch(Common::getMethod(), Common::getPathUrl());

            if ($routerDispatch == null) {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }

            list($class, $action) =
                explode(':', $routerDispatch->getController(), 2);

            $controller = '\\Cms\\Controller\\' . $class;
            $parameters = $routerDispatch->getParameters();
            call_user_func_array(
                [new $controller($this->di), $action], $parameters);
        }catch(\Exception $e){
            echo $e->getMessage();
            exit();
        }
    }
}