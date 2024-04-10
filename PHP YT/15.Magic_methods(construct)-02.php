<?php
    class Employee{
        public $fName;
        public $lName;
        public $deptartment;
        public $salary;

        public function __construct($values){
            $this->fName = isset ($values["fName"]) ? $values["fName"]: NULL;
            $this->lName = isset ($values["lName"]) ? $values["lName"]: NULL;
            $this->deptartment = isset ($values["deptartment"]) ? $values["deptartment"]: NULL;
            $this->salary = isset ($values["salary"]) ? $values["salary"]: NULL;
        }
    }

    //$employee = new Employee('Visitha' , 'Rajapaksha', 'Project Management', 150000);
    //using array
    $my_array = ['fName' => 'Visitha' , 'lName' => 'Rajapaksha', 'deptartment' => 'Project Management', 'salary' => 150000];
    $Employee_01 = new Employee($my_array);
    echo '<pre>';
    print_r(get_object_vars($Employee_01));
    echo '</pre>';
?>