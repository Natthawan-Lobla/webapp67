<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="receivelogin.css">
</head>
<body>
    <h1> ยินดีต้อนรับ </h1>
        <?php
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?>
    <form action="shopping.html"><br>
    shopping click here! <input type="submit" name="shop" value="shopping here!">
    </form>
</body>
</html>



