<?php

    require "conn.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role =  $_POST['role'];

        $stmt = $conn->prepare("INSERT INTO usertbl (username, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $password, $role);

        if($stmt->execute()){
            echo "<script>alert('Successfully Added');
                window.location.href = '../addAdmin.php';
            </script>";
        }else{
            echo "<script>alert('Failed adding data')
                window.location.href = '../addAdmin.php';
            </script>";
        }

        $stmt->close();
    }

?>