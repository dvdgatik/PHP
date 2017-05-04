<?php 
include('conectame.php');
mysql_connect($host, $usuario, $password) or die ("Error conexión");
mysql_select_db($bd) or die ("problemas al conectar bd");
$registro = mysql_query("SELECT * FROM  maestros WHERE Tipo ='$_POST[tipo]'") or die ("problemas en consulta".mysql_error());

while ($reg=mysql_fetch_array($registro))
{

      echo $reg['Nombre']." / ".$reg["Tipo"]."<br>";
}




/*
mysql_error:muestra el tipo de error de una consulta mysql
mysql_fetch_array: trae los datos de una tabla en forma de lista hasta llegar al ultimo
*/

 ?>