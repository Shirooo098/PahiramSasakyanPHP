<?php

    require "conn.php";

    if(isset($_GET['userId'])){
        $id = $_GET['userId'];
        $query = "DELETE FROM usertbl WHERE userId ='$id'";

        $result = mysqli_query($conn, $query);

        if($result){
            echo "<script>alert('Deleting Admin Success')
                window.location.href= '../adminAccount.php';
            </script>";
        }else{
            echo "<script>alert('Deleting Admin Failed')
                window.location.href= '../adminAccount.php';
            </script>";
        }
    }

?>