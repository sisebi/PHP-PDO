<?php
$PastaProjeto = "Exemplo-PDO/";
$Http = "http://";

if (substr($_SERVER['HTTP_HOST'], -1)== '/'){
define("_CAMINHO_HTTP_", "{$Http}{$_SERVER['HTTP_HOST']}{$PastaProjeto}");
}else{
    define("_CAMINHO_HTTP_", "{$Http}{$_SERVER['HTTP_HOST']}/{$PastaProjeto}");    
}

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
    define("_CAMINHO_RAIZ_", "{$_SERVER['DOCUMENT_ROOT']}{$PastaProjeto}");
}else{
    define("_CAMINHO_RAIZ_", "{$_SERVER['DOCUMENT_ROOT']}/{$PastaProjeto}");
}


define("_CAMINHO_IMG_", _CAMINHO_HTTP_."public_html/img/");
