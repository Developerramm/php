<?php

require "config.php";

$id =  $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "UPDATE student SET name = '{$name}', address = '{$address}', class = '{$class}', phone = '{$phone}' WHERE id = {$id}";

$result = mysqli_query($conn, $sql) or die("Query failed");

if ($result) {
    header("Location:{$hostname}/index.php");
} else {
    echo "Data does not insert <br>";
}
mysqli_close($conn);



?>