
<?php

function   conectar() 
{
$DBHost = "localhost";
$DBName = "archivo";
$DBUser = "root";
$DBPass = "";
$con = mysql_connect($DBHost,$DBUser,$DBPass) or die ('Error al conectar');
mysql_select_db($DBName, $con);

return $con;

}

?> 




