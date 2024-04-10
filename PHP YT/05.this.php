<?php
    class Employee{
        var $firstName;
        var $lastName;

        function fullName(){
            return $this->firstName . ' ' . $this->lastName;
        }
    }

    $employee = new Employee();
    $employee->firstName = 'Visitha Nirmal';
    $employee->lastName = 'Rajapaksha';

    echo $employee->fullName();
?>