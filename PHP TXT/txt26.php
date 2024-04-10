<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
    ?>
</body>
</html>