<?php
$conn = mysqli_connect("localhost","root","","test") or die("Connection failed". mysqli_connect_error());

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql) or die('Query failed');
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table class = "table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>City</th>
                        </tr>
                    </thead>';
    
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tbody>
                        <tr>
                            <td> {$row["id"]} </td>
                            <td> {$row["name"]} </td>
                            <td> {$row["age"]} </td>
                            <td> {$row["city"]} </td>
                        </tr>
                    </tbody>";
    }
    $output .= '</table>';
    mysqli_close($conn);
    echo $output;
    
}else{
    echo "<h3 class = 'text-danger'>Data not found </h3>";
}

?>