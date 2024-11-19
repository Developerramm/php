<?php

echo "<h3>PHP filter validation function </h3>";

$var = 25;

// var_dump(filter_var($var,FILTER_VALIDATE_INT));

// var_dump(32.32,FILTER_VALIDATE_FLOAT);

$options = array("options" => array("min_range" => 20, "max_range" => 30));


if (filter_var($var, FILTER_VALIDATE_INT, $options)) {
    echo "Value is integer <br>";
} else {
    echo "Value is not integer <br>";
}


if (filter_var($var, FILTER_VALIDATE_FLOAT, $options)) {
    echo "Value is float <br>";
} else {
    echo "Value is not float <br>";
}
