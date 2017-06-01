<?php
include "core/init.php";

if(Input::exists()){
    $task = new Task();
    try{
        $task->create(array(
                "name" => Input::get("name"),
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ));

        Redirect::to("index.php");
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
}