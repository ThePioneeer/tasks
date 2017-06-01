<?php

$GLOBALS["config"] = array(
    "mysql" => array(
        "host" => "127.0.0.1",
        "username" => "root",
        "password" => "",
        "db" => "fresher"
    )
);

//with this dont need to add include "classname" to files
spl_autoload_register(function($class){
    require_once "classes/" . $class . ".php";
});

require_once "functions/sanitize.php";