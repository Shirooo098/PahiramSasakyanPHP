<?php
    require "../Admin/action/conn.php";

    session_start();
    echo $_SESSION['username'];
    $userId = $_SESSION["userId"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
</head>
<body>
    <a href="action/logout.php">Logout</a>
    <table>
        <tr>
            <td>Pick Up Date</td>
            <td>Pick Up Time</td>
            <td>Pick Up Location</td>
            <td>Return Date</td>
            <td>Return Time</td>
            <td>Return Location</td>
            <td>Total Price</td>
            <td>Status</td>
        </tr>
        <?php
            $rows = mysqli_query($conn, "SELECT * FROM renttbl WHERE userId = $userId");

            foreach($rows as $row) : 
        ?>
        <tr>
            <td><?php echo $row["pickUpDate"]; ?></td>
            <td><?php echo $row["pickUpTime"]; ?></td>
            <td><?php echo $row["pickUpLocation"]; ?></td>
            <td><?php echo $row["returnDate"]; ?></td>
            <td><?php echo $row["returnTime"]; ?></td>
            <td><?php echo $row["returnLocation"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>