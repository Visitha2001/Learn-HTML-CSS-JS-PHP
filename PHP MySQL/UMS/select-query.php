<?php 
    require_once('inc/connection.php');
?> 
<?php 
    $query = "SELECT id, first_name, last_name, email FROM user";
    $result_set = mysqli_query($connection, $query);
    if ($result_set){
        echo "<br>Query returned";
        //checking how many records were returned from the query
        echo "<br>". mysqli_num_rows($result_set) . " records were returned<hr><br>";

        $table = '<table>';
        $table .= '<tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>';

        while($row = mysqli_fetch_assoc($result_set)){
            $table .= '<tr>';
            $table .= '<td>' . $row['id'] . '</td>';
            $table .= '<td>' . $row['first_name'] . '</td>';
            $table .= '<td>' . $row['last_name'] . '</td>';
            $table .= '<td>' . $row['email'] . '</td>';
            $table .= '</tr>';
        }
        $table .= '</table>';
        /*
        this returns associative array....
        $myArray = mysqli_fetch_assoc($result_set);
        echo "<br>";

        echo "<pre>";
        print_r($myArray);
        echo "</pre>";
        */
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT-QUERY</title>
    <style>
        table, th, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php echo $table; ?>
</body>
</html>
<?php
    mysqli_close($connection);    
?>