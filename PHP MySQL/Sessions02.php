<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Session 01</h3>
    <?php 
        echo "User ID:  {$_SESSION['id']}  <br>";
        echo "User Name:  {$_SESSION['name']}  <br>";
    ?>
</body>
</html>