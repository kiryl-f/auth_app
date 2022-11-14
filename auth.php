<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth_style.css">
    <title>Authentication</title>

    <script src="http://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'check_user.php',
                    data: $('form').serialize(),
                    success: function (response) {
                        if(response === 'found') {
                            location.href = 'index.php';
                        } else {
                            alert('Incorrect username or password, please try again');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });

            });
        });
    </script>
</head>

<body>
<h1 id="header">Enter your data here</h1>
<form>

    <label for="login">Login</label>
    <input type="text" id="login" name="login" placeholder="Enter your login here" required><br>

    <label for="login">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password here" required><br>

    <input name="submit" type="submit" value="Log in">
</form>
</body>


