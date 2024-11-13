<?php
require "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$id}";

if (mysqli_query($conn, $sql)) {
    header("Location:{$hostname1}/admin/users.php");
} else {
    echo "<h2>Unable to delete User</h2>";
}

mysqli_close($conn);
