<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Admin Account</h1>
    <form action="action/addAdminAction.php" method="POST" autocomplete="off">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="password">
        <label for="">Role</label>
        <input type="text" name="role" value="admin" readonly>
        <button name="submit">Create</button>
    </form>
</body>
</html>