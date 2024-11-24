<?php

$conn = mysqli_connect('localhost',"root","","test") or die("Connection failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql) or die("Query failed");

$output = "";

if(mysqli_num_rows($result) > 0){
    $output .= '<table>
                
    </table>';
}

?>