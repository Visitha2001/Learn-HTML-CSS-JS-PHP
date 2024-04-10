<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Array Identity
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  
        var_dump($x === $y);
    ?>
</body>
</html>