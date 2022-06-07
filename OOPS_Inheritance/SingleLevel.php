<?php

class Car {
    public $name;
    public $price;

    function _construct($name,$price) {
        echo "Cars constructor \n";
        $this->name = $name;
        $this->price = $price;       
    }
    function display() {
        echo "Car name is: $this->name \n";
        echo "Car price is: $this->price \n";
    }

}
class Audi extends Car {

}
$audi = new Audi("Audi",10000);
$audi->display();
?>