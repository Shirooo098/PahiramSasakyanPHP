<?php
    require "action/displayRequest.php";


    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
</head>
<body>
    <table>
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
        </tr>
    </table>
    <form action="action/updateRequest_action.php" method="POST" autocomplete="off">
        <select name="status" id="">
            <option value=""disabled selected>TBA</option>
            <option value="Approved">Approved</option>
            <option value="Disapproved">Disapproved</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>