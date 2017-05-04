<?php 
include("conectame.php");
if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['tipo']) && !empty($_POST['tipo']) ) {
   $con = mysql_connect($host,$usuario,$password) or die ("Problemas al conectar");
   mysql_select_db($bd, $con) or die ("Problemas al encontrar la base de datos");
   mysql_query("INSERT INTO maestros (Nombre, Tipo) VALUES ('$_POST[nombre]','$_POST[tipo]') ", $con);
   echo "Datos insertados correctamente";
}
else 
{
	echo "Problemas al insertar datos";
}


/*
-mysql_connect: realiza una conexion con la base de datos
parametros:
1. ruta del servidor
2. usuario
3. contraseña
-mysql_select_db: selecciona la base de datos en la cual se realizaran acciones
parametros:
1.nombre de la base de datos
2. datos de conexion comprobados or mysql
mysql_query: realiza una consulta a la base de datos
parametros:
1. instrucciones de consulta (INSERT, SELECT, DELETE, UPDATE)
2. conexion


nota: al trabajar dentro de comillas simples, no es necesario volverlas a poner en caracteres que lo necesiten

*/

 ?>