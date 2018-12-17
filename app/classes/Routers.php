<?php
namespace app\classes;

class Routers {
    
    public static function load($routers,$urli) {
        if (!array_key_exists($urli, $routers)){
            return "Home";
            //throw new Exception("Rota não existe :{$urli[0]}");
         }else{
//            return "../app/{$routers[$urli]}.php";   
             $r = "app\\controlers\\{$routers[$urli]}"; 
            return $r;             
         }
         
    }
    
}
