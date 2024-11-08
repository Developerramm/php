<?php

echo "<h3>Echo overriding method and property in PHP </h3>";

class base
{
    public $name = "Parent class";
    public function show(){
        echo "This is parent class<br>";
    }
}

class derived extends base
{
    public $name = "Child class";
    public function show(){
        echo "<h3>This is derived class</h3>";
    }
}

$test = new base();

echo $test->name;
$test->show();

$test1 = new derived();
echo $test1->name;
$test1->show();

