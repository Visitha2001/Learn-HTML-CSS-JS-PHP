<?php
    function my_autoload($className) {
        if(file_exists('classes/' . $className .'.class.php')){
            require_once('classes/' . $className .'.class.php');
        }else{
            die('classes ' . $className .' not found...');
        }
        
    }
    
    spl_autoload_register('my_autoload');//new autoload method after PHP 5.1

    $emp_01 = new Employee('Visitha');
?>