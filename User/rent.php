<?php
    require 'action/rent_action.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="action/logout.php">Logout</a>
    <h1>Rent</h1>
    <form action="" method="POST" autocomplete="off">
        <input type="text" placeholder="First Name">
        <input type="text" placeholder="Last Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Company">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="City">
        <input type="text" placeholder="Province">
        <input type="number" placeholder="Mobile Number">
        <input type="number" placeholder="Postal/ZIP">
        <input type="number" placeholder="Days Rent">
        <textarea name="addInfo" id=""></textarea>
        <button type="submit">Submit</button>
    </form>

    <div>
        <?php
          if(isset($carData)):
        ?>
        <div class="img"><img src="../Admin/Images/<?php echo $carData["image"];?>" alt=""></div>
        <span><?php echo $carData["price"];?></span>
        <?php endif?>
    </div>
</body>

<style>

    form{
        display: flex;
        flex-direction: column;
    }

</style>
</html>