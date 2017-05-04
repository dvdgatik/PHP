<?php 
/*La instruccion switch (caso) nos permite evaluar el valor de una variable y dependiendo de cual sea llevara un bloque de instrucciones
y es util al evaluar multitud de valores*/
$variable = "";
switch ($variable)
{
 	case 1:  echo "Vale 1";
 	break;
 	case 10: echo "Vale 10";
 	break;
 	case "hola": echo "es hola";
 	break; //Detener
 	default: echo "No es ninguna";

}
?>