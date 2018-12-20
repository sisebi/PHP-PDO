<?php
namespace app\models;

class Endereco extends WS_ViaCep{
    const CEP_METHOD = '/json/';
    
    public function retornaCEP($cep) {
        $this->fazRequisicaoFacade($cep);
        return json_decode($this->results_string, true);
    }
    public function retornaCepSimples($cep) {
//        $json = $this->buscaSimples($cep);
        $json = $this->buscaCur($cep);
//        $json = $this->retornaCEP($cep);
//
//        \app\functions\dd($json);
        $Obj = json_decode($json,true);
//        \app\functions\dd($Obj);
//        
        foreach ($Obj as $key => $value) {
            echo $Obj[$key].'<br>';
        }
    }
    

}
