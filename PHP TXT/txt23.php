<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    <?php
    //while loop
        /*
        $x = 1;
        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }

        echo "<br>";

        $y = 0;
        while($y <= 100) {
            echo "The number is: $y <br>";
            $y+=10;
        }

        echo "<br>";
    
    //DO-WHILE LOOP
        
        $x = 1;
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        
        echo "<br>";

        $x = 6;
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);

    //FOR loop
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }

        echo "<br>";

        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        }
        */

    //Foreach loop
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo "$value <br>";
        }

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($age as $x => $val) {
            echo "$x = $val<br>";
        }
    ?>
</body>
</html>