<?php
    class Employee{
        public $shortName = 'Visitha';
        protected $employeeID = 2001;
        private $salary = 50000;

        protected function Employee_info(){ //if this is privet we cant access with this method
            echo '<b>Employee info: </b><br>';
            echo 'Short Name: ' . $this->shortName .'<br>';
            echo 'Employee ID: '. $this->employeeID .'<br>';
            echo 'Basic salary: '. $this->salary .'<br>';
        }
    }
    class fullTimeEmployee extends Employee{
        public function Call_employee_info(){
            $this->Employee_info();
        }
    }

    $Employee_01 = new Employee();

    $Employee_02 = new fullTimeEmployee();
    $Employee_02->Call_employee_info();

?>