<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action/upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="text" name="brand">
        <input type="text" name="model">
        <input type="number" name="quantity">
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"  value="" required>
        <input type="number" name="price">
        <textarea name="description" id="" autocapitalize="on" autocomplete="off"></textarea>
        <button type="submit"name="submit">Submit</button>
    </form>
</body>
</html>