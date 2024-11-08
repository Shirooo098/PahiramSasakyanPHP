<?php 

    require '../Admin/action/conn.php';

    session_start();
    isLoggedIn();
    

    if(isset($_GET['carId'])){
        $carId = $_GET['carId'];

        $query = "SELECT price, carId, image FROM carstbl WHERE carId='$carId'";
        $result = mysqli_query($conn, $query);

        $carData = mysqli_fetch_assoc($result);

    }else{
        echo "<script>alert('No Car Found Error')
            window.location.href = 'cars.php'
        </script>";
    }

    function isLoggedIn(){
        if(!isset($_SESSION['userId'])){
            echo "<script>alert('Not Logged In')
            window.location.href = '../login.php'
            </script>";
        }
    }
?>