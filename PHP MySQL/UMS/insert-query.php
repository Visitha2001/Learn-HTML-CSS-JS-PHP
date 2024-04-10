<?php
    require_once('inc/connection.php');
?>
<?php
    /* 
    INSERT INTO table_name(
        column_name1,
        column_name2,
      ...
    )VALUES(
        value1,
        value2,
      ...
    )
    */
    $first_name = "lakshan";
    $last_name = "siddanayake";
    $email = "lakshan2002@gmail.com";
    $password = "lakshan2002";
    $is_deleted = 0;

    $hashed_password = sha1($password);
    //password encryption method

    echo "<br>Password" . $hashed_password;

    $query = "INSERT INTO user (first_name, last_name, email, password, is_deleted)
    VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', {$is_deleted})";

    $result = mysqli_query($connection, $query);

    if($result){
        echo "<br>Record inserted successfully";
    }else{
        echo "<br>Record not inserted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-Query</title>
</head>
<body>
    
</body>
</html>