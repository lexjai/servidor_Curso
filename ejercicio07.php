<?php
//Definir un número en una variable  y decir a qué nota le corresponde.

$nota=5;


switch (true){
    case ($nota<=10 && $nota >=9):
        echo "sobresaliente";
        break;
    case($nota<=8.9 && $nota >=7)   :
        echo "muy bien";
       break;
    case($nota<=6.9 && $nota >=6)   :
        echo " bien";
        break;
    case($nota<=5.9 && $nota >=5)   :
        echo "suficiente";
        break;
    case($nota<=4.9 && $nota >=1)   :
        echo "suspenso";
        break;
}