<?php

namespace engine;


class Cms
{
    /**
     * @var Di
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run CMS
     */
    public function run()
    {
        echo 'hello mecms';
    }
}