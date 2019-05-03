<?php 

$n= 12;

//example for if else
/* if ($n % 2==0):
    echo "this is even number";
    echo "\n";
elseif( $n  < 0):
    echo "this is negative number";
    echo "\n";
else:
    echo "this is odd number";
endif;
echo "\n"; */
// example for switch case

switch($n%2 ==0):
    case 0:
    echo "this is even number";
    break;
    default:
    echo "this is odd number";
endswitch;