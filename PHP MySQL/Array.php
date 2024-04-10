<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $MyCars = array("Toyota", "Nissan", "KIA", "Mazda");
        echo $MyCars[0];
    ?>

    <h3>Before</h3>
    <pre>
        <?php print_r($MyCars); ?>
    </pre>

    <?php $MyCars[4] = "Suzuki" ?>
    <?php $MyCars[] = "Lambogini" ?>
    <?php $MyCars[2] = "Pagani" ?>

    <h3>After</h3>
    <pre>
        <?php print_r($MyCars); ?>
    </pre>
</body>
</html>