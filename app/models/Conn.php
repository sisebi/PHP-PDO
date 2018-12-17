<?php

namespace app\models;

use PDO;
use config\db_pessoa;

class Conn {

    public static function abrir() {
        $config = db_pessoa::dsn();
        $dsn = "mysql:host={$config['host']};"
                    . "port={$config['port']};"
                    . "dbname={$config['dbname']};"
                    . "charset={$config['charset']}";
        
        $pdo = new PDO($dsn,$config['username'],$config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        
        return $pdo;
    }

}
