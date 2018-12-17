<?php

namespace app\models;

abstract class Model {

    protected $conectar;

    public function __construct() {
        $this->conectar = Conn::abrir();
    }

    public function insert($attributes) {
        $sql = "insert into {$this->table} (";
        $sql .= implode(',', array_keys($attributes)).') values(';
        $sql .= ':'.implode(', :', array_keys($attributes)).')';
       // \app\functions\dd($sql); TESTAR SQL
        
        $smt = $this->conectar->prepare($sql);
        
        foreach ($attributes as $key => $value) {
            $smt->bindValue($key, $value);
        }
        return $smt->execute();
        
    }

    public function delete($id) {
        
    }

    public function listAll() {
        $sql = "SELECT * FROM {$this->table}";
        $list = $this->conectar->prepare($sql);
        $list->execute();
        return $list->fetchAll();
    }

    public function find($id) {
        
    }

}
