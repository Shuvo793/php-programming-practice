<?php 
//factorial program
$number=6;
$factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i;
    } 
printf("Factorial number is %d = %d",$number,$factorial);
echo "\n";
//shortcut factorial program
$n=6;
for($i=$n,$factorial=1;$i>1;$i--){
    $factorial = $factorial * $i;
}
printf("Factorial number is %d = %d",$n,$factorial);