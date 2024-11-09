<?php

use function pro\wow as ProWow;
use function test\wow as TestWow;

echo "<h3>Namespace in PHP </h3>";
include 'first.php';
include "second.php";

function wow(){
    echo "Wow from namespace file <br>";
}


$obj = new pro\product();

$obj1 = new test\product();

wow();

TestWow();
ProWow();

?>