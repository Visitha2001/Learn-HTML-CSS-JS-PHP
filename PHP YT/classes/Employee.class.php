<?php
    class Employee{
        public $employeeName;
    
        function __construct($employeeName){
            $this->employeeName = $employeeName;
            echo "Employee Name: {$this->employeeName} is created....";
        }
    }
?>