<?php

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connect;

class Provider extends AbstractProvider
{

    /**
     * @var string
     */
    public $serviceName = 'db';

    /**
     * @return mixed
     */
    public function init()
    {
        $db = new Connect();

        $this->di->setContainer($this->serviceName, $db);
    }
}