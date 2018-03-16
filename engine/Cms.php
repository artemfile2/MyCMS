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
        $ss = $this->di->getContainer('test234');
        echo print_r($ss);
    }
}