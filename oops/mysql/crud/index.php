<?php

include "database.php";

$obj = new Database();

// $obj->insert('student',["name" => "Charuu",'age' => "17", 'city' => "Delhi"]);
// echo "Insert id ";


$obj->update('student',['name' => 'charu sharma', 'age' => 29, 'city' => 'delhi wali'],'id="7"');
echo "updated result ";
print_r($obj->getResult());

?>