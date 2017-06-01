<?php
include "core/init.php";

if(Input::exists()){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        "name" => array(
            "required" => true,
            "max" => 255
        )
    ));

    if($validation->passed()){
        $task = new Task();
        try{
            $task->create(array(
                    "name" => Input::get("name"),
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ));

            Redirect::to("index.php");
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
}

Redirect::to("index.php");