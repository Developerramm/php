<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM studentclass";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <select name="class">
                    <option value="" selected disabled>Select Class</option>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?= $row['cid']; ?>"> <?= $row['cname']; ?> </option>
                    <?php } ?>
                </select>
            <?php } ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>