<?php
    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    // Child classes
    class Audi extends Car {
        public function intro() : string {
            return "Choose German quality! I'm an $this->name!";
        }
    }
    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    //BMW
    class bmw extends Car {
        public function intro() : string {
            return "I'm a $this->name!";
        }
    }
    $bmw = new bmw("BMW");
    echo $bmw->intro();
?> 