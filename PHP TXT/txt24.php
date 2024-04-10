<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
                break;
            }
            echo "The number is: $x <br>";
        }

        echo"<br>";

        $y = 0;
        while($y < 10) {
            if ($y == 4) {
                $y++;
                continue;
            }
            echo "The number is: $y <br>";
            $y++;
        }
    ?>
</body>
</html>