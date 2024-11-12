<?php

class Database{

    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "test";

    private $mysqli = "";
    private $conn = false;
    private $result = array();
    
    // function to connect database
    public function __construct()
    {
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_username,$this->db_password,$this->db_name);
        }
        
        if($this->mysqli->connect_error){
            array_push($this->result,$this->mysqli->connect_error);
            return false;
        }else{
            return true;
        }
    }

    // function to insert into database
    public function insert(){

    }

    // function to update row in database
    public function update(){

    }

    // function to delete table or row(s) from database

    public function delete(){

    }

    // function to fetch data from database
    public function select(){

    }

    // close connection
    public function __destruct()
    {
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }
}

?>