<?php
namespace app\models;

use PDO;

class Connection extends PDO
{
    static private $_dsn = 'mysql:dbname=test;host=127.0.0.1';
    static private $_username = 'root';
    static private $_password = '';
    static private $_options = array();
    static protected $_instance;

    public function __construct()
    {
        return parent::__construct(self::$_dsn, self::$_username, self::$_password, self::$_options);
    }

    static public function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}