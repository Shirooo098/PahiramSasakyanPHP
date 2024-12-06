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
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/cardCars.css">
</head>
<body>
    <nav>
        <header>
           <h2>Pahiram Kotse!</h2>
           <img src="assets/logo.png" alt="">
        </header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cars.php">Cars</a></li>
            <li><a href="#">About</a></li>
            <?php if(isset($_SESSION['username'])){?>
            <li><a href="profile.php"><?php echo $_SESSION['username'] ?></a></li>
            <?php }else{?>
            <li><a href="../login.php"><button>Sign-in</button></a></li>
            <?php }?>
        </ul>
    </nav>

    <main>
        <header>
            <h3>Available Cars</h3>
        </header>

        <section>
        <?php

        $rows = mysqli_query($conn, "SELECT * FROM carstbl WHERE quantity > 0 ORDER BY carId ASC");

        foreach ($rows as $row) :
        ?>
            <div class="card-wrapper">
                <div class="card-container">
                    <a href="rent.php?carId=<?php echo $row["carId"]?>">
                        <img src="../Admin/Images/<?php echo $row["image"]; ?>" alt="">
                        <div class="card-details">
                            <h5><?php echo $row["brand"] . " ".  $row["model"];?></h5>
                            <p>P<?php echo $row["price"];?></p>
                            <p><?php echo $row["quantity"]?></p>
                        </div>
                        </a>
                </div>
            </div>
         
    <?php endforeach; ?>       
        </section>

    </main>
   
</body>
</html>