<?php
echo "<h4>Mysqli is function in php </h4>";

$var = 900;

if (is_int($var)) {
    echo "Integer hai <br>";
} else {
    echo "Integer nahi hai <br>";
}

$var = 90.50;

if (is_float($var)) {
    echo "float  hai <br>";
} else {
    echo "float nahi hai <br>";
}

$var = 90.50;

if (is_double($var)) {
    echo "double value  hai <br>";
} else {
    echo "double value nahi hai <br>";
}

$var  = "Ram KUmar";

if (is_string($var)) {
    echo "String hai <br>";
} else {
    echo "String nahi hai <br>";
}

$var = ["ram", "shyam", "Mohan"];

if (is_array($var)) {
    echo "Arrya hai <br>";
} else {
    echo "Arrya nahi hai <br>";
}


?>