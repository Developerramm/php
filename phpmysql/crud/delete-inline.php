<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id = {$id}";

$result = mysqli_query($conn, $sql) or die("Query failed");

if ($result) {
    header("Location:{$hostname}/index.php");
} else {
    echo "Data does not update <br>";
}
mysqli_close($conn);

?>