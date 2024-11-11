<?php

echo "<h2>Get Method in PHP OOPs</h2>";

class myClass{

    public $name;
    public $course;
    public $age;
    public $gender;

    public function __construct()
    {
        
    }

    function myFunc(){
        
    }
    function myFunc1(){

    }
    function namedd(){
        echo "Class name " . get_class($this) . "<br>";
    }
    

}

class xyz extends myClass{

}


$class_property = get_class_vars("myClass");

print_r($class_property);

$test = new xyz();

echo "Get parent class ". get_parent_class($test) . "<br>";

$obj = new myClass();
$obj->namedd();

$class_method = get_class_methods("myClass");

print_r($class_method);



?>