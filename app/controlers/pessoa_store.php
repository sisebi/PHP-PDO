<?php

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo',FILTER_SANITIZE_STRING);

$p = new app\models\Pessoa();
$cadastro = $p->insert([
    'nome'=>$nome,
    'sexo'=>$sexo,
]);

if ($cadastro){
    header('Location: /Exemplo-PDO/');
}


