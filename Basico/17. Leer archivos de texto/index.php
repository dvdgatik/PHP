<?php
$archivo = fopen("archivo.txt", "r") or die ("Problemas al abrir archivo.txt");
/*Se realizzara un bucle while  lo que hara es insertar cada dato del archivo uno por uno*/
while (!feof($archivo)) /*Mientras el puntero no llege al final del archivo de texto*/
{
	$traer = fgets($archivo);
	$saltolinea = nl2br($traer);
	echo $saltolinea;
}

/*
a: abrir o crear unn nuevo archivo para escribirlo
r: leer un archivo
die: si icurre algun problema
feof: nos permite decirle  o indicar cuando el foco del puntero llege al final del texto del archivo
fgets: obtener lo que se encuentre en el archivo 
nl2br: Inserta saltos de línea HTML antes de todas las nuevas líneas de un string. ||leer saltos de linea

*/




?>