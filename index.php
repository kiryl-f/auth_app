<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main page!</title>
    <link rel="stylesheet" href="css/auth_style.css">
</head>
<body>
    <?php
        require_once 'is_set.php';
        $log_out_style = "";
        $log_in_style = "";
        $create_user_style = "";
        if(user_remembered()) {
            echo "Hello, " . $_COOKIE['name'] . "<br>";
            $log_in_style = "style='display:none;'";
            $create_user_style = "style='display:none;'";
        } else {
            $log_out_style = "style='display:none;'";
        }

    ?>
    <a href="auth.php" <?php echo $log_in_style?>>Login</a>
    <br>
    <a href="registration.php" <?php echo $create_user_style?>>Create an account</a>
    <br>
    <form action="log_out.php" method="post" <?php echo $log_out_style;?>>
        <button type="submit">Log out</button>
    </form>

</body>
