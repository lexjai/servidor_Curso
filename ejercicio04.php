<?php
/*Define tres variables y ordenar en orden ascendente. Despúes en orden descendente. Guarde como ejercicio04.php*/

$a= 10;
$b =20;
$c =30;
$d = array($a,$b,$c);
sort($d);
echo "ascendente <br>";
$arr = count($d);
for($x = 0; $x < $arr; $x++) {
    echo $d[$x];
    echo "<br>";
}
echo "descendente<br>";
rsort($d);
$arr = count($d);
for($x = 0; $x < $arr; $x++) {
    echo $d[$x];
    echo "<br>";
}


?>
