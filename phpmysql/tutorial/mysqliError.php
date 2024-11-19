<?php
    echo "<h3>Mysqli error function</h3>";

    $conn = mysqli_connect("localhost","root","","test") or die("connection failed". mysqli_connect_error());

    $sql = "SELECT * FROM students";

    $result = mysqli_query($conn,$sql) or die("Query Failed". mysqli_error($conn));

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<h4>name ". $row['name']. "</h4>";
        }
    }

?>