<?php
    require 'action/displayCar.php';

    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

    if(isset($carData)):
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
    <div class="warning-box"></div>
    <form action="action/rent_action.php" method="POST" autocomplete="off" onsubmit="return formIsEmpty()">
        <input type="hidden" name="userId" value="<?php echo $_SESSION['userId'];?>">
        <input type="hidden" name="carId" value="<?php echo $carId;?>">
        <input type="number" value="price" readonly>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" value="<?php echo $email; ?>" readonly>
        <input type="number" name="mobileNum" placeholder="Mobile Number">
        <input type="text" name="address" placeholder="Address">
        <input type="date" name="pickUpDate" id="pickUpDate" placeholder="Pick-up Date">
        <label for="">PickUp Time</label>
        <input type="time" name="pickUpTime" id="pickUpTime" value="13:00" step="900">
        <select name="pickUpLocation" id="" required>
            <option value=""disabled selected>Pick-up Location</option>
            <option value="Cubao">Cubao</option>
            <option value="Marikina">Marikina</option>
            <option value="Cainta">Cainta</option>
        </select>
        <input type="date" name="returnDate" id="returnDate" placeholder="Return Date">
        <label for="">Return Time</label>
        <input type="time" name="returnTime" id="returnTime">
        <select name="returnLocation" id="" required>
            <option value=""disabled selected>Return Location</option>
            <option value="Cubao">Cubao</option>
            <option value="Marikina">Marikina</option>
            <option value="Cainta">Cainta</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

    <div>
        <div class="img"><img src="../Admin/Images/<?php echo $carData["image"];?>" alt=""></div>
        <span>Total Rental Cost: <?php echo $carData["price"];?></span>
        <?php endif?>
    </div>
</body>

<style>

    form{
        display: flex;
        flex-direction: column;
    }

</style>
<script src="action/index.js"></script>
</html>