<?php

echo "<h2>isset property in php ooops</h2>";

class student
{
    public $course;
    private $first_name;
    private $last_name;

    public function setName($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function __isset($name)
    {
        echo isset($this->$name);
    }
}

$test = new student();

$test->course = "PHP";
$test->setName("Ram", "Kumar");
echo isset($test->course);

echo isset($test->first_name);
echo isset($test->last_name);
