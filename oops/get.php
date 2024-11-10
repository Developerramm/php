<?php

echo "<h3>Get method in PHP</h3>";

class abc
{
    private $name = "Ram Kumar maniyari <br>";

    private $data = [
        'name' => "ram kumar",
        'course' => "PHP",
        "fee" => 2000
    ];

    public function sayName()
    {
        echo "Your name is $this->name <br>";
    }

    public function __get($name)
    {
        echo "<h3> $name property or method can't define or extist</h3>";
    }

    public function showArray()
    {
        foreach ($this->data as $key => $value) {
            echo " $key => $value <br>";
        }
    }
}

$test = new abc();
$test->name;
$test->sayName();
$test->showArray();
