<?php
//Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
$min=4;

switch ($min){
    case ($min<=3):
        echo "total 10 céntimos";
        break;
    case ($min>3):
          $res= (($min - 3)*5)+10;
          
          echo "total ".$res . "céntimos" ; 
}