<?php

echo "<h2>Sleep magic method in PHP OOPs</h2>";

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

    public function __sleep()
    {
        return array("first_name", "course");
    }
}

$obj = new student();

$obj->setName("Ram", "Kumar");

$srl = serialize($obj);

echo $srl;
