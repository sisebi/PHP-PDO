<?php

namespace config;

class db_pessoa {

        public static function dsn() {
            $usuario = md5("root");
            $senha = md5("");
        $d = [
                "host" => "localhost",
                "port" => "3306",
                "dbname" => "db_estudo",
                "charset" => "utf8",
                "username" => "root",
                "password" => "",
            ];
        return $d;
    }

}
