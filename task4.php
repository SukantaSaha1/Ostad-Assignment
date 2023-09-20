<?php


function fibonacci($n):void{
   $prev = 0;
$curr = 1;
$fib = 0;
for($i=0;$i<=$n;$i++){
echo $fib.",";         
    $prev = $curr;
    $curr = $fib;
    $fib = $prev + $curr; 
}




    
}





$a=fibonacci(15);


?>