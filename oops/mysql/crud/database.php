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


            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }
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
    public function update($table,$params = array(),$where = null){
        if($this->tableExists($table)){

            $args = array();
            foreach($params as $key => $value){
                $args[] = "$key = '$value'";
            }


            $sql = "UPDATE $table SET " . implode(', ',$args);
            if($where != null){
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
            
        }else{
            return false;
        }
    }

    // function to delete table or row(s) from database

    public function delete($table,$where = null){
        if($this->tableExists($table)){
            $sql = "DELETE FROM $table";
            if($where != null){
                $sql .= " WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }

        }else{
            return false;
        }
    }

    // function to fetch data from database
    public function select(){

    }

    // raw sql comman
    public function sql($sql){
        // query send by user
        $query  = $this->mysqli->query($sql);

        if($query){
            // if query run , store data in result array and return;
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            // store error in array and return
            array_push($this->result,$this->mysqli->error);
            return false;
        }
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