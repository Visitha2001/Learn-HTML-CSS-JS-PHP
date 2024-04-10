<?php
    function __autoload($className) {
        require_once('classes/' . $className .'.class.php');
    }
    //this function is nom longer available

    $emp_01 = new Employee('Visitha');
?>