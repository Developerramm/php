<?php

echo "<h3>Late static binding in PHP</h3>";

class base
{

    protected static $name = "ram";

    public function show()
    {
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base
{
    protected static $name = "Ram kumar";
}

$test = new derived();

$test->show();
