<?php
//Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.


$fecha_actual = new DateTime('now');
$dataSalida = new DateTime('2023-09-18 11:00:00');

$dif= $dataSalida->diff($fecha_actual);


echo $dif -> format('%a "dias",%H "horas"');;


