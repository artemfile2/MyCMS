<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        $foo = ['name'=>'Artem', 'country'=>'Russia'];
        $this->view->render('index', $foo);
    }

    public function product()
    {
        echo 'product page';
    }
}