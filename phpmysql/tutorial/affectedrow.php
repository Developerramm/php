<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql) or die("Query failed");

echo "Total rows ". mysqli_affected_rows($conn);



?>