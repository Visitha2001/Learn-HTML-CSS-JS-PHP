<?php
    class Employee{

    }
    
    echo"<pre>";
    $class = get_declared_classes();
    print_r($class);
    echo"</pre>";

    echo "<br>";

    $class_name = "Employee";

    if(class_exists($class_name)){
        echo $class_name." class is exists";
    }else{
        echo $class_name." does is not exist";
    }
?>