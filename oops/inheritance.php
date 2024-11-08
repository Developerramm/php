<?php 

echo "<h3> Inheritance in PHP OOPs </h3>";

class Empoyee{
    public $name;
    public $age;
    public $salary;

    function __construct($name,$age,$salary)
    {
        echo "<h4>Constructor called from employee class</h4>";
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function getEmployeeInfo(){
        echo "<div>
                <h4>Name is $this->name </h4>
                <h4>Age is $this->age </h4>
                <h4>Salary is $this->salary </h4>
        </div>";
    }
}


class Manager extends Empoyee{
    
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function getEmployeeInfo(){
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<div>
                <h4>Name is $this->name </h4>
                <h4>Age is $this->age </h4>
                <h4>Salary is $this->totalSalary </h4>
        </div>";
    }
}



$ram = new Empoyee("Ram kumar",25,250000);

$ram->getEmployeeInfo();

$piku = new Manager("Piku",20,20000);
$piku->getEmployeeInfo();

?>