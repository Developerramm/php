<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

        <label for="">Email </label>
        <input type="text" name="email" autocomplete="off"> <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php

    if (isset($_REQUEST['submit'])) {
        // echo filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);

        if(filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
            echo "Email is valid <br>";
        }else{
            echo "Email is not valid <br>";
        }
    }
    ?>
</body>

</html>