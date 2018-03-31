<?php

namespace Engine\Core\Database;

use Engine\Core\Singleton;
use PDO;

class Connect
{
    private $db;
    private $host;
    private $dbname;
    private $dbuser;
    private $dbpass;

    use Singleton;

    /**
     * Connect constructor.
     */
    public function __construct()
    {
        $this->getConfig();
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";

        $this->db = new PDO($dsn, $this->dbuser, $this->dbpass, [
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        $this->db->exec("SET NAMES UTF8");
        return $this;
    }

    public function execute($sql)
    {
        $data_sql = $this->db->prepare($sql);
        return $data_sql->execute();
    }

    public function query($sql)
    {
        $data_sql = $this->db->prepare($sql);
        $data_sql->execute();
        $result = $data_sql->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false){
            return [];
        }
        return $result;
    }

    /**
     * get configuration for connect database
     */
    private function getConfig()
    {
        if (ENV === 'Cms'){
            include_once 'config.php';
        }
        else{
            include_once '../config.php';
        }

        $this->host = $conf['host'];
        $this->dbname = $conf['dbname'];
        $this->dbuser = $conf['dbuser'];
        $this->dbpass = $conf['dbpass'];
    }
}