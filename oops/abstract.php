<?php
echo "<h3> Abstract class in PHP </h3>";

abstract class parentClass
{
    public $name;

    // abstract method
    abstract protected function calc($a, $b);
}

class child extends parentClass
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }
}


// $test = new parentClass();

$test = new child();
$test->calc(10, 20);
