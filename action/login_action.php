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
           login($password, $row);
        }else{
            echo "<script>alert('Not yet Signed In!')</script>";
        }

    }
    function login($password, $row){
        if(($password === $row['password'])){
            $_SESSION['email'] = $row['email'];
            $_SESSION['userId'] = $row['userId'];
            $_SESSION['username'] = $row['username'];
            
            $redirect = ($row["role"] == "user" ? "../User/index.php" : "../Admin/index.php");
            header("Location: $redirect");
        }else{
          incorrectInput();
        }
    }
    function incorrectInput(){
         echo "<script>alert('Incorrect Username or Password')
                    window.location.href = '../login.php'
                </script>";
    }
?>

