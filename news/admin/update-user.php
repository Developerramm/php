<?php include "header.php"; 

    require "config.php";
    session_start();
    if($_SESSION['role'] == 0){
        header("Location: {$hostname1}/admin/post.php");
    }

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $role = mysqli_real_escape_string($conn,$_POST['role']);

        $sql1 = "UPDATE user SET first_name = '{$fname}', last_name = '{$lname}', username = '{$username}', role = '{$role}' WHERE user_id = {$id}";
        
        if(mysqli_query($conn,$sql1)){
            header("Location: {$hostname1}/admin/users.php");
        }else{
            echo "<h3>Unable to update user data</h3>";
        }
    }

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->

                <?php
                $id = $_GET['id'];

                $sql = "SELECT * FROM user WHERE user_id = {$id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="user_id" class="form-control" value="<?= $row['user_id']; ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" value="<?= $row['first_name']; ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control" value="<?= $row['last_name']; ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control" value="<?= $row['username']; ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role" value="<?php echo $row['role'] == 1 ? $select = "selected" : $select = ""; ?>">
                                    <option <?php echo $select ?> value="0">User</option>
                                    <option <?php echo $select ?> value="1">Admin</option>
                                </select>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                        </form>
                <?php }
                } ?>
                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>