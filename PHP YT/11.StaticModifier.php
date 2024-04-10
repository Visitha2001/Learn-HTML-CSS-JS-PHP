<?php
    class Employee{
        public static $EmployeeCount = 0;

        public static function AddEmployee(){
            self::$EmployeeCount++;
        }
    }

    class partTimeEmployee extends Employee{

    }

    Employee::$EmployeeCount = 11;
    echo 'Number of Employees: ' . Employee::$EmployeeCount;
    echo '<br>';

    Employee::AddEmployee();
    echo 'Number of Employees: ' . Employee::$EmployeeCount;
    echo '<br>';

    echo 'Employees from part time employees class: ' . partTimeEmployee::$EmployeeCount;
    echo '<br><br>';
    partTimeEmployee::$EmployeeCount = 22;
    echo 'Number of Employees from part time employees class: ' . Employee::$EmployeeCount;
    echo '<br>';
    echo 'Employees from part time employees class: ' . partTimeEmployee::$EmployeeCount;
    echo '<br>';

?>