<?php
class Task {
    private $_db,
            $_data;

    public function __construct(){
        $this->_db = DB::getInstance();
    }

    public function create($fields = array()){
        if(!$this->_db->insert("tasks", $fields)){
                throw new Exception("There was a problem creating a task");
            }
    }

    public function get(){
        $results = $this->_db->selectAll("tasks");
        $this->_data = $results->results();
        
        return $this->_data;
    }

    public function delete($id){
        $this->_db->delete("tasks", array("id", "=", $id));
    }
}