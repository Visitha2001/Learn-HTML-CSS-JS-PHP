<?php
    class Employee{
        public function __construct(){
            echo 'New employee created... <br>';
        }
    }
    class partTimeEmployee extends Employee{

    }

    $Employee_01 = new Employee();
    $Employee_02 = new Employee();
    $Employee_03 = new Employee();
    $Employee_04 = new partTimeEmployee();

?>