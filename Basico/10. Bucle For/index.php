<?php 
//Es muy similar al bucle while pero su manera de definir es mas facil y automatica

for ($variable = 5; $variable> 1; $variable--) // 3 PARAMETROS INICIO - FINAL -CONTADOR
{
     echo $variable."<br>";
}




$acum = "";
$caracter = 'X';
$num = "5";

for ($i = 1; $i<=$num; $i++)
{
   $acum = $acum.$caracter;
   echo $i." ".$acum."<br>";
}


?>