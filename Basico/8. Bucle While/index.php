<?php
/*Nos permite repetir un bloque de acciones o instrucciones mientras una condicion se cumpla (este cumpliendo)
y si no se cumple se dejara de repetir*/
//previo antes posterior despues
$aumento = 5;
while ($aumento < 10)
{
	echo $aumento."<br>";
     //$aumento = $aumento + 1;
	$aumento++;
}

echo "resto del codigo";
?>