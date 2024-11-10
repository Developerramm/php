<?php

echo "<h2> Set property in PHP </h2>";

class student
{

    private $name;

    public function __set($property, $value)
    {
        // echo "$property is not exist <br>";
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {

            echo "<h3>You are trying to access private property</h3>";
        }
    }

    public function showName()
    {
        echo $this->name;
    }
}

$test = new student();

$test->name = "Ram Kumar";

$test->showName();
