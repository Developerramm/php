<?php

echo "<h3>Interfaces in PHP </h3>";

interface parent1
{
    function calc($a, $b);
}

interface parent2
{
    function sub($x, $y);
}

class childClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo "The sum is " . $a + $b . "<br>";
    }

    public function sub($x, $y)
    {
        echo "The substraction is " . $x - $y . "<br>";
    }
}


$test = new childClass();

$test->calc(10, 20);

$test->sub(200, 100);
