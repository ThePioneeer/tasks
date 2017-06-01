<?php
class Task {
    private $_db;

    public function __construct(){
        $this->_db = DB::getInstance();
    }

    public function create($fields = array()){
        if(!$this->_db->insert("tasks", $fields)){
                throw new Exception("There was a problem creating a task");
            }
    }
}