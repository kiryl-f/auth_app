<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth_style.css">
    <title>Authentication</title>
</head>

<body>
<h1 id="header">Enter your data here</h1>
<form name="next" id="next" action="success.php" method="post" onsubmit="return validateForms()">

    <label for="lg">Login</label>
    <input type="text" id="lg" name="lg" placeholder="Enter your login here" required><br>

    <label for="pw">Password</label>
    <input type="password" id="pw" name="pw" placeholder="Enter your password here" required><br>

    <input type="hidden" value="auth">

    <input type="submit" value="Next">
</form>
</body>