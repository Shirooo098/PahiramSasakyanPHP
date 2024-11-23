<?php

    require "action/conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Accounts</h1>
    <table>
        <th>
           <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
           </tr>
        </th>
        <tbody>
            <?php
                $rows = mysqli_query($conn, "SELECT * FROM usertbl WHERE role = 'admin' ORDER BY userId");

                foreach($rows as $row) : 
            ?>

            <tr>
                <td><?php echo $row['userId'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['role'];?></td>

                <td><button><a href="action/delete.php?userId=<?php echo $row['userId']?>">Delete</a></button></td>

            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>