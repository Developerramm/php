<?php

echo "<h1>Conditional function in PHP OPPs</h1>";

interface MyInterface {}

trait MyTrait
{
    public function myMethod() {}
}

class MyClass
{

    public $name;
    public function myMethod() {}
}

if (property_exists("MyClass", "name")) {
    echo "Property exits <br>";
} else {
    echo "Property does not exist <br>";
}

if (trait_exists("MyTrait")) {
    echo "Trati exitst <br>";
    class C
    {
        use MyTrait;
    }
} else {
    echo "Trait does not exitst <br>";
}


$test = new MyClass();

if (is_a($test, "MyClass")) {
    echo "Yah class ka object hai <br>";
} else {
    echo "Yah class ka object nahi hai <br>";
}


if (method_exists($test, "myMethod")) {
    echo "Method is exist <br>";
} else {
    echo "Method does not exits <br>";
}

if (interface_exists("MyInterface")) {
    echo "Interface exitst <br>";
    class B implements MyInterface {}
} else {
    echo "Interface does not exitst <br>";
}

if (class_exists("MyClass")) {
    echo "Class is exist <br>";
    $obj = new MyClass();
} else {
    echo "Class does not exits <br>";
}
