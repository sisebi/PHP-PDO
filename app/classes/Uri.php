<?php
    namespace app\classes;

class Uri {
    
    public static function load() {
        return explode('/',rtrim($_GET['digitado']),FILTER_SANITIZE_URL);
    }

}
