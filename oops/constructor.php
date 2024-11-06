<?php

echo "<h2>Constructor in php </h2>";

class Person
{
    public $name, $age, $city, $gender;

    function __construct($name, $age, $city = "Noida", $gender = "Male")
    {
        echo "Constructor is called <br>";
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
        $this->gender = $gender;
    }

    function show_details()
    {
        echo "<div>
                <h3>Name is $this->name </h3>
                <h3>Age is $this->age </h3>
                <h3>City is $this->city </h3>
                <h3>Gender is $this->gender </h3>
        </div>";
    }
}


$person = new Person("Ram Kumar", "30", "Sitamarhi", "M");
$piku = new Person("Piku", "20", "Delhi", "Female");

echo $person->show_details();
echo $piku->show_details();
