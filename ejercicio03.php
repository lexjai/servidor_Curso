<?php
/*Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php */

$pi= 3.14;
$radio=5;



$perimetro = 2*($pi * $radio);

$sup= $pi* pow($radio, 2);

echo "Perimetro del círculo :" . $perimetro . "<br>";
echo "superficie del círculo :" . $sup;