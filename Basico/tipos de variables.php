<html>
<head>
	<title>Variables</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body bgcolor='blue'>
<h1 class='saludo'><marquee behavior='slide'>Variables</marquee></h1>
<?php 
$dia=24; //Se declara una variable de tipo integer.
$sueldo= 758.43; //Se declara una variable de tipo double
$nombre= 'Juan'; //Se declara una variable de tipo string
$existe = true; // Se declara una variable de tipo boolean
echo "<font color='white'>";
echo '<hr>';
echo '<i><b>Variable entera:</b></i> ';
echo $dia;
echo '<br>';
echo '<i><b>Variable double:</b></i> ';
echo $sueldo;
echo '<br>';
echo '<i><b>Variable string:</b></i> ';
echo $nombre;
echo '<br>';
echo '<i><b>Variable boolean:</b></i> ';
echo $existe;
echo '<br>';
echo '<font>';
 ?>
 <?php 

$dia1=15;
$dia2=30;
echo '<i><b>El valor de la primer variable es:</b></i> ';
echo $dia1;
echo '<br>';
echo '<i><b>El valor de la segunda varable es:</b></i> ';
echo $dia2;
echo '<br>';
  ?>
  <?php 

$cadena1='<b>Diana</b>&nbsp;';
$cadena2='<b>Alex</b>&nbsp;';
$cadena3='<b>David</b>';
$todo=$cadena1.$cadena2.$cadena3.'<br>';
echo $todo;
$edad1=19;
$edad2=21;
$edad3=20;
echo $cadena1."Tiene $edad1 a&ntilde;os de edad &nbsp;";
echo $cadena2."Tiene $edad2 a&ntilde;os de edad";
   ?>
</body>
</html>
