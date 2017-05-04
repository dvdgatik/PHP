<?php 

//Funciones
/*Nos sirve o nos permite dejar de repetir un bloque de acciones*/

function funcion($p1,$p2,$p3)//Prametros

{
 $adicion= $p1 +$p2+$p3;
 $multiplicacion = $adicion*2;
 //Return:le voy a decir que es lo que me va a mostrar
  return $multiplicacion;
}
echo funcion(5,2,2);

echo '<br>';



function si($edad)
{
	if ($edad>=18)
	{
		echo 'puede votar';
	}
	else
	{
		echo 'no puede votar';
	}
	return $edad;
}


echo " ".si(19);
 ?>

