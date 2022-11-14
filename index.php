<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main page!</title>
</head>
<body>
    <?php
        require_once 'is_set.php';
        $style = "";
        if(user_remembered()) {
            echo "Hello, " . $_COOKIE['name'] . "<br>";
        } else {
            $style = "style='display:none;'";
        }

    ?>
    <a href="auth.php">Login</a>
    <br>
    <a href="registration.php">Create an account</a>
    <br>
    <form action="log_out.php" method="post" <?php echo $style;?>>
        <button type="submit">Log out</button>
    </form>

</body>
