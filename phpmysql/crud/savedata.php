<?php

require "config.php";

$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "INSERT INTO student (name,address,class,phone) VALUE
 ('{$name}', '{$address}', '{$class}','{$phone}')";

$result = mysqli_query($conn, $sql) or die("Query failed");

if ($result) {
    header("Location:{$hostname}/index.php");
} else {
    echo "Data does not insert <br>";
}
mysqli_close($conn);
