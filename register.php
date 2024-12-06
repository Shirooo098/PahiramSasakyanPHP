<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="User/action/registerAction.php" method="POST" autocomplete="off">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="password" >
        <label for="">Confirm Password</label>
        <input type="password" name="confirmPassword" >
        <button name="submit">Register</button>
    </form>
    <a href="login.php">Login</a>
</body>

</html>