<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth_style.css">
    <title>Authentication</title>


    <script>


    </script>

</head>

<body>
<h1 id="header">Enter your data here</h1>


<form name="next" id="next"  onsubmit="return validateForms()">


    <label for="lg">Login</label>
    <input type="text" id="lg" name="lg" placeholder="Enter your login here" required><br>

    <label for="pw">Password</label>
    <input type="password" id="pw" name="pw" placeholder="Enter your password here" required><br>

    <label for="c_pw">Confirm</label>
    <input type="password" id="c_pw" name="c_pw" placeholder="Confirm your password" required><br>

    <label for="mail">Email</label>
    <input type="email" id="mail" name="mail" placeholder="email@example.com" required><br>

    <label for="nm">Name</label>
    <input type="text" id="nm" name="nm" placeholder="Your name" required><br>

    <input type="hidden" value="reg">

    <input type="submit" value="Next">
</form>

</body>
</html>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script>
    function onlyLettersAndNumbers(str) {
        return /^[A-Za-z0-9]*$/.test(str);
    }

    function onlyLetters(str) {
        return /^[a-zA-Z]+$/.test(str);
    }

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    function validateForms(){
        var name = document.next.nm.value.trim();
        var password = document.next.pw.value.trim();
        var confirm_password = document.next.c_pw.value.trim();
        var login = document.next.lg.value.trim();
        var email = document.next.mail.value.trim();
        if (login.length < 6) {
            alert("Login must contain at least 6 symbols");
            return false;
        }
        if(password.length < 6) {
            alert("Password must contain at least 6 symbols");
            return false;
        }
        if(!onlyLettersAndNumbers(password)) {
            alert("Password should consist of only letters and numbers");
            return false;
        }
        if(!validateEmail(email)) {
            alert("Enter the correct email");
            return false;
        }
        if(confirm_password !== password) {
            alert("Passwords should match");
            return false;
        }
        if(name.length < 2) {
            alert("Name should contain at least 2 symbols");
            return false;
        }
        if(!onlyLetters(name)) {
            alert("Name should consist of letters");
            return false;
        }
        $.ajax({
            url: 'create_user.php',
            type: 'post',
            dataType: 'json',
            data: {login: login, password: password, name: name, email:email},
        });
    }

</script>
