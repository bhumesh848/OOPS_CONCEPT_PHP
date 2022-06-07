<?php

class DecBinary{
    function decToBinary(){
        $number = readline("Enter a number to convert to binary");
        $i=0;
        while($number>0){
            $remNum[$i] = $number%2;
            $number =(int)($number/2);
            $i++;
        }
        for($j=$i-1; $j>=0; $j--)
        echo $remNum[$j];

    }
   
}
$decbin = new DecBinary(); 
$decbin->decToBinary();

?>