<?php
    class product{
        var $productName;
        var $costPrice;
        var $salesPrice;
        var $category = 'general';

        function display(){
            echo '<br>Product Information: ';
            echo '<br><b> Name of product: </b>'.$this->productName;
            echo '<br><b> Sales price of product: </b>'.$this->salesPrice;
            echo '<br><b> Category: </b> '.$this->category;
            echo '<br>';
        }
    }
    class computer extends product{
        var $Processor;
        var $Harddisk;
        var $Ram;
        var $category = 'Apple Computer';

        function display(){
            echo '<br>Product Information: ';
            echo '<br><b> Name of product: </b>'.$this->productName;
            echo '<br><b> Processor: </b>'.$this->Processor;
            echo '<br><b> Hard disk capacity: </b>'.$this->Harddisk;
            echo '<br><b> Ram capacity: </b>'.$this->Ram;
            echo '<br><b> Sales price of product: </b>'.$this->salesPrice;
            echo '<br><b> Category: </b> '.$this->category;
            echo '<br>';
        }
    }

    $gen_product = new Product();
    $gen_product->productName = "Table fan";
    $gen_product->costPrice = 5000;
    $gen_product->salesPrice = 'USD 80';
    $gen_product->display();

    $computer_01 = new Computer();
    $computer_01->productName = "MacBook Pro";
    $computer_01->Processor = "M3 Pro";
    $computer_01->Harddisk = "512GB";
    $computer_01->Ram = "32GB";
    $computer_01->costPrice = 1000;
    $computer_01->salesPrice = 'USD 1500';
    $computer_01->display();
?>