<?php 

$conn = mysqli_connect("localhost","root","","test") or die("Connection failed");

$sql  = "SELECT * FROM students";

$result = mysqli_query($conn,$sql) or die("Query failed");

$row = mysqli_fetch_assoc($result);

echo $row['name'] . " " . $row['age'];

while($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . "<br>";
}


$row = mysqli_fetch_row($result);
echo  "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$row = mysqli_fetch_array($result,MYSQLI_NUM);
$row = mysqli_fetch_array($result,MYSQLI_BOTH);
echo  "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
$row = mysqli_fetch_all($result,MYSQLI_NUM);
$row = mysqli_fetch_all($result,MYSQLI_BOTH);
echo  "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_field($result);
echo  "<pre>";
print_r($row);
echo "</pre>";



?>