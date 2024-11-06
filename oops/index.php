<?php 
echo "Hello ram kumar";
echo "Now we are leaning php oops";

class calculator{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function substraction(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    function multiplication(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }

    function division(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }


}

echo "<br> The object is start <br>";

$object1 = new calculator();
$object1->a = 20;
$object1->b = 5;

echo "The sum is ". $object1->sum(). "<br>";
echo "The substraction is ". $object1->substraction(). "<br>";
echo "The division is ". $object1->division() . "<br>";

echo "The multiplication is ". $object1->multiplication() . "<br>";

echo "Now the code is ended here <br>";




?>