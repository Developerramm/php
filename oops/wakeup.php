<?php

echo "<h2>Wakeup magic method in PHP OOPs</h2>";

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

    public function __wakeup()
    {
        echo "This is wakeup magic method <br>";
    }
}

$obj = new student();

$obj->setName("Ram", "Kumar");

$srl = serialize($obj);

$us = unserialize($srl);

print_r($us);
