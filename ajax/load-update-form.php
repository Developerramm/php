<?php

$id = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed" . mysqli_connect_error());

$sql = "SELECT * FROM students WHERE id = $id";

$result = mysqli_query($conn, $sql) or die('Query failed');
$output = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = "
                    <tr>
                        <td>Name</td>
                        <td>
                        <input  hidden id='edit-id' value = '{$row["id"]}' >
                        <input type='text' class='form-control' id='edit-name' value = '{$row["name"]}' >
                        </td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td><input type='text' class='form-control' id='edit-age' value = '{$row["age"]}'  ></td>
                    </tr>

                    <tr>
                        <td>City</td>
                        <td><input type='text' class='form-control' id='edit-city' value = '{$row["city"]}'  ></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type='submit' class='btn btn-success edit-submit'  value = 'Update'></td>
                    </tr>";

        mysqli_close($conn);
        echo $output;
    }
} else {
    echo "<h3 class = 'text-danger'>Data not found </h3>";
}
