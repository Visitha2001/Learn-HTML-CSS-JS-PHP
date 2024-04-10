<!DOCTYPE html>
<html>
<body>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age); //ascending order(arohana piliwela)
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        /* 
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            arsort($age);
        ?>
        */
    ?>
</body>
</html>
