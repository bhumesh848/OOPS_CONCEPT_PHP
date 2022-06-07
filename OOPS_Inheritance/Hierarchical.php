<?php

class GrandFather
{
    function BaseFun()
    {
        echo "BaseFun() ";
    }
}

class Father extends GrandFather
{
    function Derived1Fun()
    {
        echo "Derived1Fun() ";
    }
}

class Child extends GrandFather
{
    function Derived2Fun()
    {
        echo "Derived2Fun() ";
    }
}

$Obj1 = new Father();
$Obj2 = new Child();

$Obj1->BaseFun();
$Obj1->Derived1Fun();



$Obj2->BaseFun();
$Obj2->Derived2Fun();

?>

?>