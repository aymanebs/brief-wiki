<?php

namespace app\config;

use PDO;

class Db_conn{

    private static $connection;

    private function __construct()
    {
        $db_host="localhost";
        $db_user="root";
        $db_password="";
        $db_name="wiki";

        try{
            $this->pdo=new PDO(host=$db_host,)
        }

    }





}