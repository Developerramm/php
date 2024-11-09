<?php
echo "<h3>Type hint in php </h3>";

function sum(int $value)
{
    echo $value + 10 . "<br>";
}

sum(10);
// sum("ram");


function fruits(array $names)
{
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}

$arr = ["ram", "Shyam", "Mohan", 10, 20, 20];
fruits($arr);


class hello
{
    public function sayHello()
    {
        echo "Hello everyone <br>";
    }
}

class bye
{
    public function saybye()
    {
        echo "bye everyone <br>";
    }
}

function wow(hello $c)
{
    $c->sayHello();
}

$test = new bye();
$test1 = new hello();

wow($test1);
