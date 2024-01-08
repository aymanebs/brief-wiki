<?php

namespace app\config;
require_once '../../vendor/autoload.php';
use PDO;
use PDOException;

class Db_conn{

    private static $connection;

    private function __construct()
    {
        $db_host='localhost';
        $db_user='root';
        $db_password='';
        $db_name='wiki';

        
        
        try{
            $dsn="mysql:host=" . $db_host .";dbname=" . $db_name;
            self::$connection=new PDO($dsn,$db_user,$db_password);
        }
        catch(PDOException $e){
            error_log("connection failed: " . $e->getMessage());
        }
    }

    public static function getConnection(): PDO{
        if(!self::$connection){
            new self();
        }
            return self::$connection;

    }

}

