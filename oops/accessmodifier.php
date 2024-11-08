<?php

echo "<h3>Access modifier in PHP OOPs</h3>";

class base{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        echo "Your name is $this->name <br>";
    }
}

class child extends base{
    public function __construct($name)
    {
        $this->name = $name;
    }
}



$base1 = new base("Ram kumar");
$base1->show();

$child = new child("child class ");

$child->show();



?>