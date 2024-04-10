<!DOCTYPE html>
<html>
<body>
    <?php
        $cars = array("Volvo", "Bmw", "Toyota","Benz");
        sort($cars);
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
    ?>
</body>
</html>
