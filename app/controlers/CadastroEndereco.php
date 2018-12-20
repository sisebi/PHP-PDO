<?php
namespace app\controlers;

use app\classes\Page;

class CadastroEndereco extends Page{
    
    public function __construct() {
        $this->setIdioma("pt-BR");
        $this->setTitulo("Enderço");
        $this->setBody(self::form());
        $this->loadPage();
    }
    
    private function form() {
        $r = require_once _CAMINHO_RAIZ_.'app/controlers/endereco_form.php';
        return $r;
    }

    
    
}
