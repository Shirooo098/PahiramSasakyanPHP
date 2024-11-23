<?php
    require "../../Admin/action/conn.php";
 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        validateConfirmPassword($password, $confirmPassword);

        $stmt = $conn->prepare("INSERT INTO usertbl (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if($stmt->execute()){
            echo "<script>alert('Registered Successfully');
                window.location.href = '../../login.php';
            </script>";
        }else{
            echo "<script>alert('Failed adding data')
                window.location.href = '../../register.php';
            </script>";
        }

        $stmt->close();
    }

    function validateConfirmPassword($password, $confirmPassword){
        if($confirmPassword != $password){
            echo "<script>alert('Incorrect Password or Confirm Password');
            window.location.href = '../../register.php'
            </script>";
            exit;
        }
        return true;
    }


?>