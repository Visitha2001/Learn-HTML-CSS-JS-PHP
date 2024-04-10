<?php
    $x = 100;
    $y = & $x;//copy by reference method
    //$y = $x;//copy by value method


    echo 'Value of x: '. $x . '<br>';
    echo 'Value of y: '. $y . '<br>';

    $y = 500;

    echo 'Value of x: '. $x . '<br>';
    echo 'Value of y: '. $y . '<br>';
    //this will change both x and y values to 500.

    echo '<br><br>';

    class product{
        public $Description;
        public $Price;
        public function __construct($Description,$Price){
            $this->Description = $Description;
            $this->Price = $Price;
        }
    }

    $Product_01 = new Product('Apple MacBook', 1500);
    //$Product_02 = $Product_01;//copy by reference
    $Product_02 = clone $Product_01;//copy by value
    
    echo '<hr>';
    echo "Product_01: {$Product_01->Description} - {$Product_01->Price} <br>";
    echo "Product_02: {$Product_02->Description} - {$Product_02->Price} <br>";

    $Product_02->Description = "ASUS STRIX G15";
    $Product_02->Price = 2000;

    echo '<hr>';
    echo "Product_01: {$Product_01->Description} - {$Product_01->Price} <br>";
    echo "Product_02: {$Product_02->Description} - {$Product_02->Price} <br>";
    //this happen because of copy_by_referance. this will correct by using copy_by_value method.
?>