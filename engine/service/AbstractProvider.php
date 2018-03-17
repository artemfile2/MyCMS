<?php

namespace Engine\Service;

use Engine\Di\Di;

abstract class AbstractProvider
{
    /**
     * @var \engine\Di\Di
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param Di $di
     */
    public function __construct(Di $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}