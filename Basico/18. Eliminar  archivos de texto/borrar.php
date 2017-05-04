<?php 

$filename = $_POST['archivo'];
unlink($filename);
echo "El archivo ha sido eliminado con exito";

/*
unlink: se encarga de borrar archivos de texto plano (txt,php,html)
	primer parametro: ruta del archivo
	
*/
 ?>