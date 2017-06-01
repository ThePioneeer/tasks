<?php
class Config {
    //returns the given path array object value
    public static function get($path = null){
        if($path){
            $config = $GLOBALS["config"];
            $path = explode("/", $path);

            foreach($path as $bit){
                //checks if $bit is inside $config array and then sets it to main array
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
    }
}