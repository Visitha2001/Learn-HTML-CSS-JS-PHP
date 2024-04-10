<?php
    class Employee{
        private $basicSalary = 50000;

        public function getBasicSalary(){
            return 'Basic Salary USD' . $this->basicSalary . '<br>'; 
        }
    }

    class fullTimeEmployee extends Employee{

    }

    $Employee_01 = new fullTimeEmployee;
    $Employee_01->basicSalary = 10000;
    echo $Employee_01->basicSalary;

    echo '<br>';

    echo $Employee_01->getBasicSalary();
?>