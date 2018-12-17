<?php
require_once '../app/views/index.php';

$p = new app\models\Pessoa();
app\functions\dd($p->listAll());

