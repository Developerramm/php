<?php

echo "Trait in PHP <br>";

trait hello
{
    public function sayHello()
    {
        echo "<h3>Hello everyone </h3>";
    }
}

trait bye
{
    public function sayBye()
    {
        echo "Bye Bye everyone <br>";
    }
}


class base
{
    use hello;
    use bye;
}

class base1
{
    use hello, bye;
}

$test = new base();

$test->sayHello();
$test->sayBye();

$test1 = new base1();

$test1->sayHello();
$test1->sayBye();
