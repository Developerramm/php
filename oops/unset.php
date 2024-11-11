<?php

echo "<h2>Unset property in PHP </h2>";

class student
{
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function showName()
    {
        echo "Your first name is $this->first_name <br>";
        echo "last name is $this->last_name <br>";
    }

    public function __unset($name)
    {
        unset($this->$name);
    }
}


$test = new student();
unset($test->course);

$test->setName("Ram", "Kumar");
$test->showName();
unset($test->first_name);
echo $test->course;
