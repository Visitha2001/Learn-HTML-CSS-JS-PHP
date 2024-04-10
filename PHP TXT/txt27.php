<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Arrays
        $cars = array("Benz", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br>";
        echo count($cars);//length (the number of elements) of an array
    */
    //Array loops
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);
        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
    ?>
</body>
</html>