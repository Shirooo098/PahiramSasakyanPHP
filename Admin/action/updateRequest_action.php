<?php
    require "conn.php";

    if(isset($_POST['update'])){
        $status = $_POST['status'];
        $rentId = $_POST['rentId'];

        $stmt = $conn->prepare("UPDATE renttbl SET status = ? WHERE rentId = ?");
        $stmt->bind_param("si", $status, $rentId);

        if($stmt->execute()){
            echo "<script>alert('Form Updated successfully')
            window.location.href = '../rentRequest.php';
            </script>";
        }else{
        echo "<script>alert('Failed adding data')</script>";
        }
    }

?>