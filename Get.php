<?php
class Get{
    public static function all(){
        return (null != filter_input_array(INPUT_GET) ? filter_input_array(INPUT_GET) : null);
    }

    public static function key($key){
        return (null != filter_input(INPUT_GET, $key) ? null != filter_input(INPUT_GET,$key) : null);
    }

}