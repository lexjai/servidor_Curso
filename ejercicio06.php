<?php
//Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario:


$a=3;
$b=1;
$c=$a*$b;

if($c < ($a+$b)){
    
    echo "la suma de " . $a . "+" . $b ." = ". ($a+$b) . " es mayor al producto";
    
}else{
    echo "el producto de " . $a . "*" . $b ." = ". $c . " es mayor a la suma";
}