<?php

class GrandFather {
    function gFather(){
        echo "Grand father age = 75 \n";
    }
}
class Father extends GrandFather {
    function father(){
        echo "Father age = 45 \n";
    }
}
class Children extends Father{
    function child(){
        echo "Child age = 20 \n";
    }
}
$child = new Children();
$child->gFather();
$child->father();
$child->child();
?>