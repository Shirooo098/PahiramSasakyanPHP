<?php
    require "../Admin/action/conn.php";

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="action/logout.php">Logout</a>

    <table>
        <tr>
            <td>ID</td>
            <td>Model</td>
            <td>Brand</td>
            <td>Image</td>
            <td>Description</td>
        </tr>
        <?php
            $rows = mysqli_query($conn, "SELECT * FROM carstbl order BY carId ASC");
            
            foreach($rows as $row) : 
        ?>
        <tr>
                <td><?php echo $row["carId"]; ?></td>
                <td><?php echo $row["model"]; ?></td>
                <td><?php echo $row["brand"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td><img src="../Admin/Images/<?php echo $row["image"]; ?>" alt=""></td>
                <td><?php echo $row["description"]; ?></td>
                <td><button><a href="rent.php?carId=<?php echo $row["carId"]?>">Rent</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>