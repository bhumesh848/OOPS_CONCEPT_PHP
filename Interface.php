<?php
Interface Animal {
    public function color();
}
class Dog implements Animal {
    public function color() {
        echo"Dog color is :black \n";
    }
    
}
class Cat implements Animal {
    public function color() {
        echo "Cat color is :white \n";
    }
}
$animal = new Cat();
$animal->color();
$animal = new Dog();
$animal -> color();