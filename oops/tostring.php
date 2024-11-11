<?php

echo "<h2>toString magic method in PHP OOPs</h2>";

class abc
{

    public function __toString()
    {
        return "You can't print object as a string <br>";
    }
}

$test = new abc();

echo $test;
