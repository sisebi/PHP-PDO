<?php
    require_once '../Bootstrap.php';
    use app\classes\Routers;
    use app\classes\Uri;
    $routers = [
        '' => 'Home',
        '/' => 'Home',
        'Home' => 'Home',
        'Cadastro' => 'Cadastrar',
        'Pessoa' => 'pessoa_store',
    ];

    $urli = Uri::load();
    $rota = Routers::load($routers, $urli[0]);
    $page = new $rota;
    
