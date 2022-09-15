<?php
//Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.

$notaf=5;
$notaSec=3;

if((($notaf+$notaSec)/2)>4.9){
    echo "aprobado";
}else{
    echo "reprobado";
}
