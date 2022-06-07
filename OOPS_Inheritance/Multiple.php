<?php
trait Car {
    function car() {
        echo "car is running \n";
    }
}
trait Bmw {
    function Bmw(){
        echo "Bmw is a car \n";
    }
}
class Color {
    use car,Bmw; 
}
$color = new Color();
$color-> Bmw();


?>