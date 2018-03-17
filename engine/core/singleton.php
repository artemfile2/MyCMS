<?php

namespace Engine\Core;

trait Singleton
{
    protected static $singleton_instance;

    /**
     * @return instance singleton
     */
    public function getInstance(){
        if(!isset(static::$singleton_instance)){
            static::$singleton_instance = new static();
        }
        return static::$singleton_instance;
    }

    protected function __construct(){}
    protected function __clone(){}
    protected function __sleep(){}
    protected function __wakeup(){}

}