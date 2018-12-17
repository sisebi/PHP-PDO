<?php
namespace app\classes;

abstract class Page {
    private $idioma;
    private $titulo;
    private $subTitulo;
    private $head;
    private $header;
    private $body;
    private $footer;


    public function __construct() {
        
    }

    public function loadPage() {
        require_once _CAMINHO_RAIZ_.'app/views/Layout.php';
    }
    
    public function getHead() {
        return $this->head;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getBody() {
        return $this->body;
    }

    public function getFooter() {
        return $this->footer;
    }

    public function setHead($head) {
        $this->head = $head;
    }

    public function setHeader($header) {
        $this->header = $header;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function setFooter($footer) {
        $this->footer = $footer;
    }
        
    public function getIdioma() {
        return $this->idioma;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getSubTitulo() {
        return $this->subTitulo;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setSubTitulo($subTitulo) {
        $this->subTitulo = $subTitulo;
    }

    
}
