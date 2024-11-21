<?php
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

// echo $name,$age,$city;
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed" . mysqli_connect_error());

$sql = "INSERT INTO students(name,age,city)
VALUES('{$name}','{$age}','{$city}')";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}

?>