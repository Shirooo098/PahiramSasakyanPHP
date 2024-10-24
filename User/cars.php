<?php
    require "../Admin/action/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Model</td>
            <td>Brand</td>
            <td>Image</td>
            <td>Description</td>
        </tr>
        <?php
            $i = 1;
            $rows = mysqli_query($conn, "SELECT * FROM carstbl order BY carID ASC");
            
            foreach($rows as $row) : 
        ?>
        <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["model"]; ?></td>
                <td><?php echo $row["brand"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td><img src="../Admin/Images/<?php echo $row["image"]; ?>" alt=""></td>
                <td><?php echo $row["description"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>