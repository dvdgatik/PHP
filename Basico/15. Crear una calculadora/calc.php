<?php 
$operacion = $_POST["lista"];
switch ($operacion)
{
	case 'suma':
	echo $_POST["c1"] + $_POST["c2"] + $_POST["c3"]; 
	break;
	case 'resta':
	echo $_POST["c1"] - $_POST["c2"] - $_POST["c3"]; 
	break;
	case 'multi':
	echo $_POST["c1"] * $_POST["c2"] * $_POST["c3"];
	break;
	case 'div':
	echo $_POST["c1"] / $_POST["c2"] / $_POST["c3"];
	break;

}
 ?>