<?php

echo "<h1> Mysqli Object in PHP </h1>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID {$row['id']} Name  {$row['name']} age {$row['age']} city {$row['city']} <br>";
    }
} else {
    echo "<h2> No record found </h2>";
}

$conn->close();
