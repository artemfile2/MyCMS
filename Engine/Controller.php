<?php

namespace Engine;

use Engine\Di\Di;
abstract class Controller
{
    /**
     * @var \Engine\Di\Di
     */
    protected $di;

    protected $view;

    /**
     * Controller constructor.
     * @param Di $di
     */
    public function __construct(Di $di)
    {
        $this->di = $di;
        $this->view = $this->di->getContainer('view');
    }
}