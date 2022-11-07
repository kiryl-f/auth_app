<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth_style.css">
    <title>Authentication</title>
</head>

<body>
<h1 id="header">Enter your data here</h1>
<form id="login">
    <div class="alert " id="error" role="alert" style="display:none;">
        <div><a href="#" class="close" data-dismiss="alert" aria-label="close">X</a></div>
        <div class="error_show" id="error_show1"></div>
    </div>
    <label for="lg">Login</label>
    <input type="text" id="lg" placeholder="Enter your login here" required><br>
</form>
<form id="password">
    <label for="pw">Password</label>
    <input type="password" id="pw" required><br>
</form>
<form id="confirm_password">
    <label for="c_pw">Confirm</label>
    <input type="password" id="c_pw" required><br>
</form>
<form id="email">
    <label for="mail">Email</label>
    <input type="email" id="mail" placeholder="email@example.com" required><br>
</form>
<form name = "name_form" id="name_form"  >
    <label for="nm">Name</label>
    <input type="text" id="nm" name="nm" placeholder="Your name" required><br>
</form>

<form name="next" id="next" action="act.php" method="post" onsubmit="return validateForms()">
    <input type="submit" value="Next">
</form>

</body>
</html>

<script>
    function validateForms(){
        let name = document.name_form.nm.value.trim();
        if (name==null || name==="") {
            alert("Name can't be blank");
            return false;
        }
    }

</script>

<script src="js/fetch.js"></script>
