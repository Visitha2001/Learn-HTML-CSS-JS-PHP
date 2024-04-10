<?php
    class Employee{

    }

    class Customer{

    }

    $mike = new Employee();
    $richerd = new Employee();
    $visitha = new Customer();

    echo get_class($mike)."<br>";
    echo get_class($visitha)."<br>";

    if(is_a($mike, 'Customer')) {
        echo "mike belongs to customer class";
    }else{
        echo "mike belongs to Employee class";
    }
?>