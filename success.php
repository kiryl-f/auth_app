<!DOCTYPE html>
<html lang="en">
<head>
    <title>Completed!</title>
</head>

<body>
<h1>
    Validation completed!
</h1>

<p>
    <?php
        require_once 'user.php';

        $user = new User($_POST['lg'], $_POST['nm'],$_POST['mail'], $_POST['pw']);
        var_dump($user);
    ?>
</p>
</body>
</html>