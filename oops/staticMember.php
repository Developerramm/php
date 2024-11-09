<?php

echo "<h3> Static member in PHP </h3>";

class base
{
    public static  $name = "Ram Kumar";

    public function show()
    {
        echo self::$name;
    }

    public static function info()
    {
        echo self::$name;
    }

    public function __construct($n)
    {
        echo "Constructor is called <br>";
        // echo self::$name;
        self::$name = $n;
        self::info();
    }
}

class derived extends base
{
    public function getInfo()
    {
        echo parent::info();
    }
}

// $test = new base();
// $test->show();

// echo base::$name;

// base::info();

$test = new base("piku");

$test2 = new derived("Gunji");
$test2->getInfo();
