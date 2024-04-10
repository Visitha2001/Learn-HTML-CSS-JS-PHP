<?php 
    class product{
        var $productName;
        var $costPrice;
        var $salesPrice;

        function calculate_sales_price(){
            $this->salesPrice = round($this->costPrice * 1.2 , 2);
        }
    }

    class computer extends product{
        var $processor;
        var $harddisk;
        var $ram;
    }

    class garmant extends product{

    }

    $my_product =  new computer;
    $my_product->productName = "Galaxy S23 Ultra";
    $my_product->costPrice = 1000;
    $my_product->calculate_sales_price();
    $my_product->processor = "Intel core i9-13900K";

    $my_garment = new garmant;

    $my_array = get_object_vars($my_product);
    echo "Object vars for my_product";
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";

    $my_array = get_class_vars(get_class($my_product));
    echo "Class vars for my_product";
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";

    //method
    echo "get parant class of garment";
    echo "<br>";
    echo get_parent_class($my_garment);

    //method
    echo "<br><br>Checking if computer is a subclass of garment";
    if(is_subclass_of("computer","garment")){
        echo "<br>computer is a subclass of garment";
    }else{
        echo "<br>computer is not a subclass of garment";
    }

    //method
    echo "<br><br>";
    echo "getting a list of class parents for computer";
    $parents = class_parents("computer");
    echo "<pre>";
    print_r($parents);
    echo "</pre>";
?>