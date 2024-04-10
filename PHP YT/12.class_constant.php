<?php
    echo 'PHP version: ' . phpversion();// if this below 7 access modifiers won't work with const
    class Employee{
        public const EPF_RATE = 0.08;
        public $basicSalary = 50000;

        public function calc_EPF(){
            return $this->basicSalary * self::EPF_RATE;
        }
    }    

    $Employee_01 = new Employee();
    echo '<br>';
    echo 'EPF RATE: ' . Employee::EPF_RATE;
    echo '<br>';
    echo 'EPF rate for employee 01: ' . $Employee_01->calc_EPF();
?>