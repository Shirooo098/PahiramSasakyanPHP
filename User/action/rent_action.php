<?php

    require '../../Admin/action/conn.php';


    if(isset($_POST['submit'])){
        $userId = $_POST['userId'];
        $carId = $_POST['carId'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobileNum = $_POST['mobileNum'];
        $pickUpDate = $_POST['pickUpDate'];
        $pickUpTime = $_POST['pickUpTime'];
        $pickUpLocation = $_POST['pickUpLocation'];
        $returnDate = $_POST['returnDate'];
        $returnTime = $_POST['returnTime'];
        $returnLocation = $_POST['returnLocation'];
        $price = $_POST['price'];

        $stmt = $conn->prepare("INSERT INTO renttbl
         (userId, carId, name, email, address, mobileNum,
          pickUpDate, pickUpTime, pickUpLocation,
          returnDate, returnTime, returnLocation, price)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iisssissssssi",
           $userId, $carId, $name, $email, $address, $mobileNum,
        $pickUpDate, $pickUpTime, $pickUpLocation, $returnDate, $returnTime, $returnLocation, $price);

        if($stmt->execute()){
            echo "<script>alert('Form submitted successfully')
                window.location.href = '../index.php';
            </script>";
        }else{
            echo "<script>alert('Failed adding data')</script>";
        }

    }
?>
