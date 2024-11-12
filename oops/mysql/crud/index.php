<?php

include "database.php";

$obj = new Database();

$obj->insert('student',["name" => "Charuu",'age' => "17", 'city' => "Delhi"]);


echo "Insert id ";
print_r($obj->getResult());

?>