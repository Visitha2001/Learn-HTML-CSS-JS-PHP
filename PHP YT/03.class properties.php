<?php
    class Employee{
        var $Employeee_id;
        var $First_Name;
        var $Last_Name;
        var $is_active = false;
    }

    $Employee_01 = new Employee;
    $Employee_02 = new Employee;

    $Employee_01->Employeee_id = 2001;
    $Employee_01->First_Name = "Visitha Nirmal";
    $Employee_01->Last_Name = "Rajapaksha";
    
    $Employee_02->Employeee_id = 2007;
    $Employee_02->First_Name = "Nishada Dulith";
    $Employee_02->Last_Name = "Rajapaksha";

    echo "Employee details: ";
    echo "<br><br>";

    echo "Employee ID :" . $Employee_01->Employeee_id."<br>";
    echo "Employee First Name :" . $Employee_01->First_Name."<br>";
    echo "Employee Last Name :" . $Employee_01->Last_Name."<br>";

    echo "<br>";

    echo "Employee ID :" . $Employee_02->Employeee_id."<br>";
    echo "Employee First Name :" . $Employee_02->First_Name."<br>";
    echo "Employee Last Name :" . $Employee_02->Last_Name."<br>";

    //get_class_vars function
    $class_vars = get_class_vars("Employee");
    echo "Class variables :";
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";
    
    //get_object_vars function
    $object_vars = get_object_vars($Employee_01);
    echo "Object variables of employee 01 :";
    echo "<pre>";
    print_r($object_vars);
    echo "</pre>";

    //property exists function
    if(property_exists("Employee","First_Name")) {
        echo "proprty of employee 01 is found";
    }else{
        echo "proprty of employee 01 is not found";
    }
?>