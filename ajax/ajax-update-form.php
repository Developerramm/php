<?php

$id = $_POST['stuId'];
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

$conn = mysqli_connect('localhost', "root", "", "test") or die("Connection failed");

$sql = "UPDATE students SET name = '{$name}', age = '{$age}', city = '{$city}' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($conn);
