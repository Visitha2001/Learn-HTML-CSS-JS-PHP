<?php
    class Employee{
        public function calc_salary(){
            echo 'Calculate salary... <br>';
        }
    }
    class seniorEmployee extends Employee{
        public function calc_salary(){
            echo 'Add additional allowances... <br>';
            parent::calc_salary();
        }
    }
    
    $seniorEmployee = new seniorEmployee();
    $seniorEmployee->calc_salary();
?>