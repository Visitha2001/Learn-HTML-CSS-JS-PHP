<?php
    class Product{
        public static $category = 'general product';

        public static function showCategory(){
            echo 'Product category: ' . static::$category . '<br>';
            //static bindings
        }
    }
    class computer extends Product{
        public static $category = 'computer';
    }

    Product::showCategory();
    computer::showCategory();

?>