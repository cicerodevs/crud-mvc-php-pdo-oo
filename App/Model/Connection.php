<?php
namespace App\Model;

use PDO;

class Connection
{
    private static $instance;

    public static function getConn()
    {
        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost;dbname=vikings;charset=utf8', 'root', '');
        endif;

        return self::$instance;
    }
}