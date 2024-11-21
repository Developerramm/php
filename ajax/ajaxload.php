<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed" . mysqli_connect_error());

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die('Query failed');
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output = '<table class = "table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>delete</th>
                        </tr>
                    </thead><tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
                        <tr>
                            <td> {$row["id"]} </td>
                            <td> {$row["name"]} </td>
                            <td> {$row["age"]} </td>
                            <td> {$row["city"]} </td>
                            <td> <button class ='btn btn-danger delete-btn' data-id='{$row["id"]}'>delete</button> </td>
                        </tr>
                    ";
    }
    $output .= '</tbody></table>';
    mysqli_close($conn);
    echo $output;
} else {
    echo "<h3 class = 'text-danger'>Data not found </h3>";
}
