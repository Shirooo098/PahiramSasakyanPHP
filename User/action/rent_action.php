<?php 

    require '../Admin/action/conn.php';

    session_start();

    if(!isset($_SESSION['userId'])){
        echo "<script>alert('Not Logged In')
        window.location.href = '../login.php'
        </script>";
    }

    if(isset($_GET['carID'])){
        $carID = $_GET['carID'];

        $query = "SELECT price, image FROM carstbl WHERE carID='$carID'";
        $result = mysqli_query($conn, $query);

        $carData = mysqli_fetch_assoc($result);

        
    }else{
        echo "<script>alert('No Car Found Error')</script>";
    }
?>