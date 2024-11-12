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
            $this->conn = true;
        }
        
        if($this->mysqli->connect_error){
            array_push($this->result,$this->mysqli->connect_error);
            return false;
        }else{
            return true;
        }
    }

    // function to insert into database
    public function insert($table,$params = array()){
        if($this->tableExists($table)){

            $table_columns = implode(", ",array_keys($params));
            $table_value = implode("', '",$params);
            $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }

        }else{
            return false;
        }
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

    // check table exist or not
    private function tableExists($tableName){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$tableName'";
        $tableInDb = $this->mysqli->query($sql);

        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result, $tableName. "Does not exist in database");
                return false;
            }
        }
    }

    // get Result
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
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