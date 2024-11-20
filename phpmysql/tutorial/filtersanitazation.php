<?php

echo "PHP Filter Sanitization function <br>";

$var = "ram(.kumar)@exa/mple.com";

$var= filter_var($var,FILTER_SANITIZE_EMAIL);
echo "<br>";

if(filter_var($var,FILTER_VALIDATE_EMAIL)){
    echo $var . "<br>";
    echo "Valid email <br>";
}else{
    echo "Not valid email <br>";
}


$var = "https://www.adr  ebox.com";

$var = filter_var($var,FILTER_SANITIZE_URL);
if(filter_var($var,FILTER_VALIDATE_URL)){
    echo " $var  Valid Url <br>";
}else{
    echo "NOt valid url <br>";
}


$var = "ara4aa432acgd";

$var = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
if(filter_var($var,FILTER_VALIDATE_INT)){
    echo " $var  Valid Number <br>";
}else{
    echo "NOt valid number <br>";
}

$var = "2432.342basec";
echo $var;

echo "<br>";

$var =  filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT);

if(filter_var($var,FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION)){
    echo "$var is valid float <br>";
}else{
    echo "$var is not a valid float <br>";
}

?>