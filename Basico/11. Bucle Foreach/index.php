<?php
// bucle nos permite traer todos los elementos y claves de un array

//array predefinido
echo "<h1>Predefinido</h1>";
$arreglo= array("Elemento 1","Elemento 2");
/*1p nombre del array
 as
* 2p variable para acceder a los elementos*/
foreach ($arreglo as $elementos) 
{
  echo $elementos/*[7]*/."<br>";
}

echo "<hr>";
//array asosiativo o personalizado
echo "<h1>Asosiativo</h1>";
$arreglo2 = array("Clave1"=>"Elemento 1", "Clave2"=>"Elemento 2");
foreach ($arreglo2 as $claves => $elementos1)
{
	echo $claves." => ".$elementos1."<br>";
}





?>