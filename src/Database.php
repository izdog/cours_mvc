<?php

namespace App;

use \PDO;

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $dbname = 'cinema';
    private $password = null;
    private static $_db = null;

    

    private function __construct() {
        $db = new PDO("mysql:host={$this->host}; dbname={$this->dbname}; charset=utf8", $this->user, $this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        self::$_db = $db;
    }
    
    /**
     * @return Database Une instance de Database(Singleton)
     */
    public static function getDB() : \PDO {
        if(!self::$_db){
            new Database();
        }
        return self::$_db;
    }

}