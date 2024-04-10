<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Cast float to int
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast."<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast."<br>";

        //The pi() function returns the value of PI
        echo(pi())."<br>"; // returns 3.1415926535898

        echo(min(0, 150, 30, 20, -8, -200))."<br>";  // returns -200
        echo(max(0, 150, 30, 20, -8, -200))."<br>";  // returns 150

        //The abs() function returns the absolute (positive) value of a number
        echo(abs(-6.7))."<br>";  // returns 6.7

        //The sqrt() function returns the square root of a number
        echo(sqrt(64))."<br>";  // returns 8

        //The round() function rounds a floating-point number to its nearest integer
        echo(round(0.60))."<br>";  // returns 1
        echo(round(0.49))."<br>";  // returns 0

        //The rand() function generates a random number
        echo(rand())."<br>";
        echo(rand(10, 100))."<br>";//random integer between 10 and 100


    ?>
</body>
</html>