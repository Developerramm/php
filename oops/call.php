<?php

echo "<h3>Call Method in PHP</h3>";

class student
{
    private $first_name;
    private $last_name;

    private function setName($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function __call($method, $arguments)
    {
        print_r($arguments);

        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $arguments);
        } else {
            echo "This is private or non existing method";
        }
    }

    public function showName()
    {
        echo "<h1>Your name is  $this->first_name 
        $this->last_name </h1>";
    }
}

$test = new student();

$test->setName("Ram", "Kumar");

$test->showName();
