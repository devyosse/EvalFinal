<?php


namespace App\config;

use PDO;
use PDOException;

class Connect
{
    public static function getPDO() :? PDO
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=eval_final;charset=utf8", 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch (PDOException $e){
            die($e);
        }
        return $bdd;
    }

}
