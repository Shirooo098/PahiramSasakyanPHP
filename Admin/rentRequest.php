<?php

    require "action/conn.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Rent Request</title>
</head>
<body>
    <aside>    
        <nav>
            <header>
                <h1>Pahiram Kotse!</h1>
            </header>
            <span>
                <ul class="profile-container">
                    <?php if(isset($_SESSION['username'])){?>
                    <div class="profile">
                         <li><?php echo $_SESSION['username'] ?> <svg class="dropdown-icon"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></li>
                    </div>
                    <?php }else{ 
                        echo "<script>alert('Admin not Logged in!)
                            window.location.href = '../login.php'
                        </script>?";
                    }?>
                </ul>
                    
                      
            </span>
            <ul class="list-container">
                <h5>Pages</h5>
                <li><a href="index.php">Cars</a></li>
                <li><a href="addCars.php">Add Cars</a></li>
                <li><a href="requests.php">Request</a></li>
                <li><a href="addAdmin.php">Add an Admin</a></li>
                <li><a href="adminAccount.php">Admin Accounts</a></li>
                <li><a href="../User/action/logout.php">Logout</a></li>
            </ul>
        </nav>
    </aside>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>