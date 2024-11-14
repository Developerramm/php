<?php 

include 'config.php';

if(isset($_FILES['fileToUpload'])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = end(explode('.',$file_name));

    $extension = array("jpeg","jpg",'png');

    if(in_array($file_ext,$extension) === false){
        $errors[] = "file extension is not matched";
    }

    if($file_size > (2097152 * 10)){
        $errors[] = "Fize size must be less than 20 MB";
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }else{
        echo "<p>Error while file upload</p>";
        die();
    }
}

$title = mysqli_real_escape_string($conn,$_POST['post_title']);
$description = mysqli_real_escape_string($conn,$_POST['postdesc']);
$category = mysqli_real_escape_string($conn,$_POST['category']);
$date = date("d M,Y");

session_start();

$author = $_SESSION['user_id'];

$sql = "INSERT INTO post (title,description,category,post_date,author,post_img) 
        VALUES('{$title}','{$description}','{$category}','{$date}','{$author}','{$file_name}');";
$sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$category}";        


if(mysqli_multi_query($conn,$sql)){
    header("Location: {$hostname1}/admin/post.php");
}else{
    echo "<div class = 'alert alert-danger'>Query failed</div>";
}

mysqli_close($conn);

?>