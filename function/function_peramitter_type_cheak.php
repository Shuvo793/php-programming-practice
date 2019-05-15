<?php

//result dhik asce but variable ta onno jekono type hole vule result asbe

/* function factorial($n){
    $result=1;
    for($i=$n;$i>1;$i--){
        $result = $result * $i;
    }
    return $result;
}

$x=0;
echo "{$x} is value". factorial($x); */


//type cheaking

 function factorial(int $n){
    $result=1;
    for($i=$n;$i>1;$i--){
        $result = $result * $i;
    }
    return $result;
    
}

$x='abc';
echo "{$x} is value". factorial($x);
 

    

    






