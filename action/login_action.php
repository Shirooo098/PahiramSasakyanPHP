<?php
    require '../Admin/action/conn.php';

    session_start();

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = $conn->prepare("SELECT * FROM usertbl where email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $result = $query->get_result();

        if($row = $result->fetch_assoc()){
            if(($password === $row['password'])){
                $_SESSION['email'] = $row['email'];
                $_SESSION['userId'] = $row['userId'];
                $_SESSION['username'] = $row['username'];
                
                if($row["role"] == "user"){
                    header("Location: ../User/index.php");
                    exit();
                } 
                else if($row["role"] == "admin"){
                    header("Location: ../Admin/index.php");
                    exit();
                } 
            }else {
                echo "<script>alert('Incorrect Username or Password')
                    window.location.href = '../login.php'
                </script>";
            }
        } else{
            echo "<script>alert('Incorrect Username or Password')
                    window.location.href = '../login.php'
                </script>";
        }

    }

?>

