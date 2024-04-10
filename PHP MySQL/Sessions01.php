<?php 
    session_start();
    $_SESSION['id'] = 2001;
    $_SESSION['name'] = "Visitha";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "User ID:  {$_SESSION['id']}  <br>";
        echo "User Name:  {$_SESSION['name']}  <br>";
    ?>
</body>
</html>