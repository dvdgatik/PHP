<?php 

$formatos= array('.jpg','.png','.docx','.doc', '.xlsx','.JPG','.pdf','.txt','.mpp','.pptx','ppt','.sql','.rar','.zip','.mp3');
//isset verifica si existe algo en la memoria
if (isset($_POST['boton']))
{
	$nombrearchivo = $_FILES ['archivo'] ['name'];  // guarda nombre del archivo
	$nombreTMParchivo = $_FILES ['archivo'] ['tmp_name'];  // guarda nombre temporal del archivo
	//substr: extrae una parte de la cadena de texto
	//strrpos : obtener una posicion de algun caracter que encuentre
	$ext = substr($nombrearchivo, strrpos($nombrearchivo, '.')); //pueden obtener la extension de cualquier archivo    
    if (in_array($ext, $formatos))  //in_array me ayuda a saber si algun elemento esta dentro de mi arreglo 
    //si estas extensiones estan dentro de mi arreglo entonces..
    {
       if (move_uploaded_file ($nombreTMParchivo, "files/$nombrearchivo")) 
       {
        include ('connect.php');
         $con = conectar();
        $ruta="files".'/'.$nombrearchivo;
        $insert= "INSERT INTO file (id , direccion) VALUES ('','$ruta')";
         mysql_query($insert);

       	echo 'archivo '.$nombrearchivo.' subido exitosamente';
       }
       else
       {
       	 echo 'ha ocurrido un error';
       }
    }
    else
    {
    	echo 'Archivo no permitido';

    }
}

echo '</br>';
echo "<a href='files/$nombrearchivo'>Mostrar Archivo</a>";
  ?>