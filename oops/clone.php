<?php

echo "<h2>Clone magic method in PHP </h2>";

class student
{
    public $name;
    public $course;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class course
{
    public $cname;
    public function __construct($cname)
    {
        $this->cname = $cname;
    }
}

$studetn1 = new student("Ram Kumar");

echo $studetn1->name;

$studetn2 = clone $studetn1;
$studetn2->name = "Piku Kumar";
echo $studetn2->name;
echo $studetn1->name;
