<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "news";

$conn = mysqli_connect($hostname,$username,$password,$databaseName) or die("DB connection failed".mysqli_connect_error());

$hostname1 = "http://localhost/php/news";

?>