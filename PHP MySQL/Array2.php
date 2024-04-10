<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $MyCars = array(10 , 20 , 30 ,"Toyota", "Nissan", array("Green" , "Blue" , "red" , "Black"), "KIA", "Mazda");
        echo $MyCars[0];
    ?>

    <h3>Before</h3>
    <pre>
        <?php print_r($MyCars); ?>
    </pre>

    <?php $MyCars[4] = "Suzuki" ?>
    <?php $MyCars[] = "Lambogini" ?>
    <?php $MyCars[2] = "Pagani" ?>

    <?php $MyCars[5][0] = "Apple" ?>
    <?php $MyCars[5][1] = "Orange" ?>
    <?php $MyCars[5][2] = "Banana" ?>
    <?php $MyCars[5][3] = "Papaya" ?>


    <h3>Array in the array</h3>
    <pre>
        <?php print_r($MyCars[5]); ?>
    </pre>
</body>
</html>