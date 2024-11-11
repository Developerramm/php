<?php

echo "<h2>invoke magic method in PHP </h2>";

class calculator
{
    public $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        echo $this->a + $this->b;
    }

    public function __invoke()
    {
        echo "<h2>This is invoke function in PHP </h2>";
        echo $this->a * $this->b;
    }
}

$obj = new calculator(10, 20);

$obj->sum();

$obj();
