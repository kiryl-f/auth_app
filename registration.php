<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth_style.css">
    <title>Registration</title>

    <script src="http://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();

                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                if(password === confirm_password) {
                    $.ajax({
                        type: 'post',
                        url: 'create_user.php',
                        data: $('form').serialize(),
                        success: function (response) {
                            if(response === 'login'){
                                alert('This login is taken');
                            } else if(response === 'email') {
                                alert('This email is taken');
                            } else {
                                location.href = 'index.php';
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    });
                } else {
                    alert('Passwords do not match');
                }
            });
        });
    </script>

</head>

<body>
<h1 id="header">Enter your data here</h1>


<form>

    <label for="login">Login</label>
    <input type="text" id="login" name="login" placeholder="Enter your login here" required><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password here" required><br>

    <label for="confirm_password">Confirm</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required><br>

    <label for="mail">Email</label>
    <input type="email" id="mail" name="mail" placeholder="email@example.com" required><br>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name" required><br>

    <input type="hidden" value="reg">

    <input type="submit" value="Next">
</form>

</body>
</html>
