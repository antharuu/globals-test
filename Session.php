<?php
class Session{
    
    public static function all(){
        return (isset($_SESSION) ? $_SESSION : null);
    }

    public static function get($key){
        return (isset($_SESSION[$key]) ? $_SESSION[$key] : null);
    }

    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function push($key, $value){
        $_SESSION[$key][] = $value;
    }

    public static function forget($key){
        unset($_SESSION[$key]);
    }
}