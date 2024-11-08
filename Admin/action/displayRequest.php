<?php

    require "conn.php";

    if(isset($_GET["rentId"])){
        $rentId = $_GET["rentId"];

        $query = "SELECT carId, name, email, address, mobileNum, 
        pickUpDate, pickUpTime, pickUpLocation, 
        returnDate, returnTime, returnLocation, price, requested_at, status FROM renttbl WHERE rentId='$rentId' ";
        $result = mysqli_query($conn, $query);

        $rentData = mysqli_fetch_assoc($result);


    }else{
        echo "<script>alert('No Rent Request Found Error')
        window.location.href = 'rentRequest.php'
        </script>";
    }
?>