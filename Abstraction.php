<?php
abstract class Animal{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    abstract public function display();
    function sum(){
        echo "sum of two numbrs = 17";
    }
}
class Lion extends Animal{
    public function display()
    {
        echo "The Animal is $this->name \n";
        echo "Skin color is : $this->color \n";

    }
}
$animal = new Lion("lion","Brown");
echo $animal->display();
$animal->sum();

?>