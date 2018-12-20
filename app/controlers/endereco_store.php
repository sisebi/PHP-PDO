<?php
$cep = filter_input(INPUT_POST, 'cep',FILTER_SANITIZE_STRING);

$c = new \app\models\Endereco();
$c->retornaCepSimples($cep);
//app\functions\dd($c);