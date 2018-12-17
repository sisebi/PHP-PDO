<?php

namespace app\controlers;

use app\classes\Page;

class Cadastrar extends Page {

    public function __construct() {
        echo 'https://www.youtube.com/watch?v=THcY4D05eeI&list=PLyugqHiq-SKeKcSqQQpxCozazJ7N1K8N-&index=11';
        $this->setIdioma("pt-BR");
        $this->setTitulo("Cadastro");
        $this->setBody(self::criarForm());
        $this->loadPage();
    }
    
    private function form() {
        return require_once _CAMINHO_RAIZ_.'app/controlers/pessoa_form.php';
    }

    private function criarForm() {
        $r = '<br>';
        $r .= '<div class = "container" >';
        $r .= '<br>';
        $r .= '<h1>Cadastro</h1>';
        $r .= '<br>';
        $r .= '<div class = "jumbotron">';
        $r .= '<form action = "Pessoa" method = "POST" role = "">';
        $r .= '<div class = "form-group">';
        $r .= '<label for = "nome">Nome</label>';
        $r .= '<input type = "text" class = "form-control" name = "nome" aria-describedby = "emailHelp" placeholder = "Seu nome">';
        $r .= '<small id = "emailHelp" class = "form-text text-muted">Digite seu nome</small>';
        $r .= '</div>';
        $r .= '<div class = "form-group">';
        $r .= '<label for = "sexo">Sexo</label>';
        $r .= '<input type = "text" class = "form-control" name = "sexo" placeholder = "Seu sexo">';
        $r .= '</div>';
        $r .= '<button type = "submit" class = "btn btn-primary">Salvar</button>';
        $r .= '</form>';
        $r .= '</div>';
        $r .= '</div>';
        return $r;
    }

    private function criarTela() {
        $r = '<h1>Tela de Cadastro</h1><hr>';
        $r .= '<div class="container" >';
        $r .= '<div class = "jumbotron">';
        $r .= '<form>';

        $r .= $this->addEdit("editNome", "Nome", "Digite seu nome");
        $r .= $this->addEdit("editSobreNome", "Sobre Nome", "Digite seu Sobre Nome");
        $r .= $this->addEdit("editEndereco", "Endereço", "Digite seu Endereço");

        $r .= '</form>';

        $r .= '<br><hr>';
        $r .= '<a class="btn btn-primary btn-lg" href="#" role="button">Cadastrar</a>';

        $r .= '</div>';
        $r .= '</div><hr>';

        return $r;
    }

    private function addEdit($nome, $label, $informe) {

        $r = '<label for = "' . $nome . '">' . $label . '</label>';
        $r .= '<input type = "text" class = "form-control" id = "' . $nome . '" placeholder = "' . $informe . '">';

        return $r;
    }

}
