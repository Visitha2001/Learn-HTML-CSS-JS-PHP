<?php 
    require_once('inc/connection.php');
?>
<?php
    /*
    UPDATE table_name
    SET colum_1 = value_1, colum_2 = value_2
    WHERE colum_name = value
    */

    $query = "UPDATE user SET first_name = 'Lakshan', last_name = 'dissanayake' WHERE id = 8";

    $result_set = mysqli_query($connection, $query);
    //mysqli_affected_rows[]; returns number of affected rows

    if($result_set){
        echo "<br>" . mysqli_affected_rows($connection) . " Records updated successfully";
    }else{
        echo "<br>Records not updated";
    }

    /*
    DELETE FROM table_name
    WHERE colum_name = value
    LIMIT 1
    */

    $query = "DELETE FROM user WHERE id = 6 LIMIT 1";
    $result_set = mysqli_query($connection, $query);
    if($result_set){
        echo "<br>". mysqli_affected_rows($connection). " Records deleted successfully";
    }else{
        echo "<br>Records not deleted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE_&_DELETE-QUERY</title>
</head>
<body>
    
</body>
</html>
<?php
    mysqli_close($connection);    
?>