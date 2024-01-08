<?php

namespace app\config;
require_once './vendor/autoload.php';
use PDO;
use PDOException;

class Db_conn{

    private static $connection;

    private function __construct()
    {
        $db_host=$_ENV['DB_HOST'];
        $db_user=$_ENV['DB_USER'];
        $db_password=$_ENV['DB_PASSWORD'];
        $db_name=$_ENV['DB_NAME'];

        try{
            $dsn="mysql:host=" . $db_host .";dbname=" . $db_name;
            self::$connection=new PDO($dsn,$db_user,$db_password);
        }
        catch(PDOException $e){
            error_log("connection failed: " . $e->getMessage());
        }
    }

    public static function getConnection(){
        if(!self::$connection){
            new self();
        }
            return self::$connection;

    }

}