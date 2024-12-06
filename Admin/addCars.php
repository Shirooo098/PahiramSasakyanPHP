<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
    <main>
        <h3>Add Cars</h3>
        <article>
            <div class="form-wrapper">
                <form action="action/upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="brandModel-container">
                    <div class="brand-container">
                        <label for="">Brand: </label>
                        <input type="text" name="brand">
                    </div>    
                    <div class="model-container">
                        <label for="">Model: </label>
                        <input type="text" name="model">
                    </div>
                </div>
                <div class="quantityPrice-container">
                    <div class="quantity-container">
                        <label for="">Quantity: </label>
                        <input type="number" name="quantity">
                    </div>
                    <div class="price-container">
                        <label for="">Price: </label>
                        <input type="number" name="price">
                    </div>
                </div>
                <div class="description-container">
                    <label for="">Description</label>
                    <textarea class="desc-textBox"name="description" autocapitalize="on" autocomplete="off"></textarea>
                </div>
                <label for="">Image: </label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"  value="" required>
                <div class="btn-container">
                    <button type="submit"name="submit">Submit</button>
                </div>
            </div>
        </form>
        </article>
    </main>
</body>
</html>