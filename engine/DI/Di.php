<?php
/**
 * Created by PhpStorm.
 * User: Qwerty
 * Date: 14.03.2018
 * Time: 7:37
 */

namespace engine\Di;

class Di
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setContainer($key, $value)
    {
        $this->container[$key] = $value;

        return $this;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getContainer($key)
    {
        return $this->hasContainer($key);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function hasContainer($key)
    {
        return $this->container[$key];
    }
}