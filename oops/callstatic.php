<?php

echo "<h1> PHP call static method in OOPs</h1>";

class student
{

    private static function hello($name)
    {
        echo "<h3>This is static function </h3>";
        echo "Hello Your name is $name <br>";
    }

    public static function __callStatic($method, $arguments)
    {
        if (method_exists(__CLASS__, $method)) {
            call_user_func_array([__CLASS__, $method], $arguments);
        } else {
            echo "Method does not exist $method <br>";
        }
    }
}


$test = new student();

student::hello("Ram Kumar");
