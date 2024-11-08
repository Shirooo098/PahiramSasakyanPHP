<?php

    require "action/conn.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Request</title>
</head>
<body>
    <a href="action/logout.php">Logout</a>
    <table>
        <tr>
            <td>Car ID</td>
            <td>Username</td>
            <td>email</td>
            <td>Address</td>
            <td>Mobile Number</td>
            <td>Pick Up Date</td>
            <td>Pick Up Time</td>
            <td>Pick Up Location</td>
            <td>Return Date</td>
            <td>Return Time</td>
            <td>Return Location</td>
            <td>Price</td>
            <td>Requested At</td>
            <td>Status</td>
        </tr>

        <?php
            $rows = mysqli_query($conn, "SELECT * FROM renttbl WHERE status = 'TBA'");

            foreach($rows as $row) : 
        ?>

        <tr>
            <td><?php echo $row["carId"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["mobileNum"]; ?></td>
            <td><?php echo $row["pickUpDate"]; ?></td>
            <td><?php echo $row["pickUpTime"]; ?></td>
            <td><?php echo $row["pickUpLocation"]; ?></td>
            <td><?php echo $row["returnDate"]; ?></td>
            <td><?php echo $row["returnTime"]; ?></td>
            <td><?php echo $row["returnLocation"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["requested_at"];?></td>
            <td>
            <form action="action/updateRequest_action.php" method="POST" autocomplete="off">
                <input type="hidden" name="rentId" value="<?php echo $row['rentId']; ?>" />
                <select name="status" id="">
                    <option value=""disabled selected>TBA</option>
                    <option value="Approved">Approved</option>
                    <option value="Disapproved">Disapproved</option>
                </select>
                <button type="submit" name="update">Update</button>
            </form>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>