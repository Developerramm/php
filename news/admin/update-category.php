<?php include "header.php";
    include 'config.php';
    session_start();
    if($_SESSION['role'] == 0){
        header("Location: {$hostname1}/admin/post.php");
    }
?>

<?php
if (isset($_POST['submit'])) {
    include 'config.php';
    $id = $_GET['id'];
    $name = mysqli_real_escape_string($conn, $_POST['cat_name']);

    $sql1  = "UPDATE category SET category_name = '{$name}' WHERE category_id = {$id}";

    $result1  = mysqli_query($conn, $sql1) or die("Query failed");

    if (mysqli_query($conn, $sql1)) {
        header("Location: {$hostname1}/admin/category.php");
    } else {
        echo "<p class = 'text-danger'>Unable to update Category</p>";
    }
}

?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="adin-heading"> Update Category</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php
                include 'config.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM category WHERE category_id = {$id}";
                $result = mysqli_query($conn, $sql) or die("Query failed");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="cat_id" class="form-control"
                                    value="<?= $row['category_id']; ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="cat_name" class="form-control"
                                    value="<?= $row['category_name']; ?>" placeholder="" required>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                        </form>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>