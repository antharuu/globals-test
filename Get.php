<?php
class Get{
    
    public static function all(){
        return (isset($_GET) ? $_GET : null);
    }

    public static function key($key){
        return (isset($_GET[$key]) ? $_GET[$key] : null);
    }

}