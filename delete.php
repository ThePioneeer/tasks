<?php
require_once "core/init.php";

$task = new Task();

if(Input::exists()){
    $task->delete(Input::get("id"));
}

Redirect::to("index.php");