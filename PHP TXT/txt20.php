<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*Returns the value of $x.
        The value of $x is expr1 if expr1 exists, and is not NULL.
        If expr1 does not exist, or is NULL, the value of $x is expr2.*/

        // variable $user is the value of $_GET['user']
        // and 'anonymous' if it does not exist
        
        /*
        If the URL is: http://example.com/page.php?user=John
        In this case, the value of the "user" parameter is "John," so the code sets the $user variable to "John."
        we first check if the "user" parameter is present in the $_GET array. If it exists, we assign its value to the $user variable. If it doesn't exist (or is empty), we assign "anonymous" as the default value. 
        */
        echo $user = $_GET["user"] ?? "anonymous";
        echo "<br>";
        echo "hello $user.<br>";
        
        // variable $color is "red" if $color does not exist or is null
        echo $color = $color ?? "red";
    ?>  
</body>
</html>