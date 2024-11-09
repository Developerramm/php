<?php

echo "<h3> Trait Method overring in PHP </h3>";

trait hello
{
    public function sayHello()
    {
        echo "Hello from hello Trait \n";
    }
}

trait hi
{
    public function sayHello()
    {
        echo "Hello from Hi trait\n";
    }
}

class base
{
    public function sayHello()
    {
        echo "Hello from base class\n";
    }
}

class child extends base
{
    use hello, hi{
        hello::sayHello as newHello;
    }
    // public function sayHello()
    // {
        // echo "Hello from child class\n";
    // }
}

$test = new child();
$test->sayHello();
