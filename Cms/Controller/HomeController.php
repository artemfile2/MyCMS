<?php

namespace Cms\Controller;

use Engine\Controller;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     * @param $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }

    public function index()
    {
        echo 'index page';
    }

    public function product()
    {
        echo 'product page';
    }
}