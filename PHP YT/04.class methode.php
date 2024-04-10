<?php
    class Employee{
        function greeting(){
            return "Welcome";
        }

        function getBasicSalary(){
            
        }
    }

    $Employee_01 = new Employee();
    echo $Employee_01->greeting();

    $class_methods = get_class_methods("Employee");

    get_class_methods("Employee");
    echo "<pre>";
    print_r($class_methods);
    echo "</pre>";
    
    if(method_exists("Employee", "greeting")){
        echo "Method exists";
    }else{
        echo "Method does not exist";
    }
?>