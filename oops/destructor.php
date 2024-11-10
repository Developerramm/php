<?php

echo "<h3>Destructor in PHP </h3>";

class abc
{
    public function __construct()
    {
        echo "This is constructor function <br>";
    }

    public function hello()
    {
        echo "Hello everyone <br>";
    }

    public function __destruct()
    {
        echo "This is destructor funcion <br>";
        echo "<h3>MySql connection closed in destructor</h3>";
    }
}

$test = new abc();
$test->hello();
$test->hello();
$test->hello();
$test->hello();
