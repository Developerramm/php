<?php

include "database.php";

$obj = new Database();

// $obj->insert('student',["name" => "Charuu",'age' => "17", 'city' => "Delhi"]);
// echo "Insert id ";


// $obj->update('student',['name' => 'charu sharma', 'age' => 29, 'city' => 'delhi wali'],'id="7"');
// echo "updated result ";
// print_r($obj->getResult());

// $obj->delete('student','id="5"');
// echo "deleted result ";
// print_r($obj->getResult());


$obj->sql('SELECT * FROM student');
echo "data in array ";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";


?>