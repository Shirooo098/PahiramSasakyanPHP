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
    <h1>Home</h1>
    <ul>
        <li><a href="cars.php">Rent</a></li>
        <?php if(isset($_SESSION['username'])){?>
        <li><a href="profile.php"><?=$_SESSION['username']?></a></li>
        <?php }else{  ?>
            <li><a href="../login.php">Login</a></li>
        <?php }?>
    </ul>
</body>
</html>