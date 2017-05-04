<?php
/*
los operadores nos permite realizar alguna operacion ya sea matematicca, logica etc (7)
Operadores de Arítmetica
Adición (+)
Substracción (-)
Multiplicación(*)
División (/)
Porcentaje (%) Residuo
*/
//ejemplo
echo 'Operadores aritmeticos<br>';
$adicion=4+4; //el valor es 8
$Multi=$adicion*3;
echo $adicion.'<br>'.$Multi.'<br>';


/*Operadores de Asignacion
Asignacion (=)
//ejemplo
*/
echo 'Operadores de Asignacion<br>';
$valor1='hola';
$valor2=20;
echo $valor1.'<br>'.$valor2.'<br>';

/*Operador de cadena
Punto (.)*/
echo 'Operadores de Cadena<br>';
$texto= 'Hola '.' Tengo'.' 20 A&ntilde;os'.'<br>';
echo $texto.'<br>';
$tengo = 'Hola ';
$tengo .= ' Tengo';
$tengo .= ' 20 A&ntilde;os';
echo $tengo.'<br>';
/*Operadores de Comparacion
Igual (==)
Identico(===) igual y del mismo tipo
Diferente (!= o <>)
No identico (!==) diferente o  de distinto tipo
Menor que (<)
Mayor que (>)
Menor o igual que (<=)
Mayor o igual que (>=)
*/
//ejemplo
echo 'Operadores de Comparacion<br>';
echo (6>=4);
echo '<br>';
echo (11==11.0);


//Operadores de control de errores
//Arroba (@)
//ejemplo
echo 'Operadores de errores<br>';
echo 'Hola';
/*@*/define(); //Esto deberia producir un error
echo '<br>';
 /*Operadores de Incremento y Decremento
 Incremento(++)
 Decremento (--)
 */
 echo 'Operadores de Incremento/decremento <br>';
 $variable = 3;
 echo $variable++; /* si se pone el ++ despues se aumentara la proxima vez que se escriba 
 pero si se pone enates de la variable se aumnetara en ese instante por principio estructurado*/
 echo '<br>';
 echo $variable.'<br>';

 /*Operadores de Logica
 gregan operaciones en un condicional 
 Y (&& o AND) devuelve 1 si ambos operandos son 1
 O (|| o OR)  devuelve 1 si algun operando es 1
 O exclusivo (XOR) devuelve 1 si solo 1  operando es 1
 ejemplo
 */
  echo 'Operadores Logicos<br>';
 echo ((2==2) && (2!=1));
 echo "<br>";
 echo ((3==3)xor(4==4));

?>