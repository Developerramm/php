<?php
echo "<p>Filter var array function </p>";

$arr = array(
    
    "marks" => "89",
    "email" => "ram kumar@gmail.com",
);


$filter = array(
    
    "marks" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            'min_range' => 1,
            "max_range" => 100
        ),
    ),
    "email" => FILTER_SANITIZE_EMAIL
);

echo "<pre>";
print_r(filter_var_array($arr,$filter));
echo "</pre>";
?>