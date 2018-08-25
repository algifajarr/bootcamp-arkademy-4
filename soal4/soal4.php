<?php
// PHP code to get the Fibonacci series
function Fibonacci($n,$baris){
 
    $num1 = 0;
    $num2 = 1;
 
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
    echo "<br>";
     while ($num1 < 16){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
    echo "<br>";
     while ($num1 < 100){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
 
// Driver Code
$n = 4;
$baris = 3;
Fibonacci($n,$baris);
?>