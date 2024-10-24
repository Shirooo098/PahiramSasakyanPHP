<?php

    require 'conn.php';

    if(isset($_POST["submit"])){
        $brand = $_POST["brand"];
        $model = $_POST["model"];
        $quantity = $_POST["quantity"];
        $description = $_POST["description"];
        $price = $_POST["price"];

        if($_FILES["image"]["error"] === 4){
            echo "<script>alert('Image does not exist')</script>";
        }else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo "<script>alert('Invalid Image Extension')</script>";
            }
            else if($fileSize > 1000000){
                echo "<script>alert('Image size is too large')</script>";
            }
            else{
                $newImageName = uniqid() . '.' . $imageExtension;
                move_uploaded_file($tmpName, '../Images/' . $newImageName);

                $stmt = $conn->prepare("INSERT INTO carstbl (brand, model, quantity, image, description, price) VALUES (?, ?, ?, ?, ?, ?) ");
                $stmt->bind_param("ssissd",$brand, $model, $quantity, $newImageName, $description, $price);
                if($stmt->execute()){
                    echo "<script>alert('Successfully Added');
                        window.location.href = '../index.php';
                    </script>";
                }else{
                    echo "<script>alert('Failed adding data')</script>";
                }

                $stmt->close();
            }
        }
    }
?>