<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main page!</title>
    <link rel="stylesheet" href="auth_style.css">
</head>
<body>
    <?php
        require_once 'is_set.php';
        $log_out_style = "";
        $log_in_style = "";
        if(user_remembered()) {
            echo "Hello, " . $_COOKIE['name'] . "<br>";
            $log_in_style = "style='display:none;'";
        } else {
            $log_out_style = "style='display:none;'";
        }

    ?>
    <a href="auth.php" <?php echo $log_in_style?>>Login</a>
    <br>
    <a href="registration.php">Create an account</a>
    <br>
    <form action="log_out.php" method="post" <?php echo $log_out_style;?>>
        <button type="submit">Log out</button>
    </form>

</body>
