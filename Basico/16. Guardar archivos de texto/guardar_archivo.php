<?php 
$fi = fopen('archivo.txt', "a")
or die ("problemas al crear archivo");
fwrite($fi, "\n"); 
fwrite($fi, "Datos: ");
fwrite($fi, "\n"); 
fwrite($fi, $_POST['nombre']); 
fwrite($fi, "\n"); 
fwrite($fi, $_POST['comentario']);
fwrite($fi, "\n"); 
fwrite($fi, "-------------------------");
fclose($fi);
echo "Datos Guardados";


/*Funcion para crear archivo
primer parametro: nombre del archivo
segundo parametro: instruccion que ejecuta al abrir el archivo
a: nos permite crear un nuevo archivo si no existe yescribir algunos datoos si ya existen al fina de los datos que ya existen
die: si tiene problemas al conectar
fput y fwrite: ambas instrucciones permitenn insertar datos en un archivo.
fwrite:
primer parametro: dar referencia del archivo que se ha creado.
segundo parametro: cadena de caracteres (string) que queremos que aparezca en el archivo
\n: nos permite realizar saltos de  linea en archivos de texto y a la hora de enviar mails

*/
 ?>