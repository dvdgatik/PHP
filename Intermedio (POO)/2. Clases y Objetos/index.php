<?php 
/*
Sintaxis:
Class  nombre de la clase  {
	
}
*/
class Persona  { 
/*Funciona como un molde*/
//Atributos
// echo  public $nombre = "Pedro";   No Es Posible
  public $nombre = "Pedro";  /*Los atributos se definen con una variable*/
//Metodos
   public function hablar($mensaje) { 
         echo $mensaje;
   } /*Los metodos se definen con una funcion*/

   }

  $persona = new Persona();  /*estamos instanciando un nuevo objeto y le estamos atribuyendo 
  la clase persona para usar sus metodos y atributos*/

  /*La palabra reservada new significa instansear : ocurrencia de una determinada clase o entidad */
  
  echo $persona->nombre; // obtengo un atributo
  $persona->hablar("Saludos desde codigo facilito"); //obtengo un metodo
 


 /*->: simbolo para llamar a un atributo o metodo

 Nota: No se pueden producir salidas dentro de una clases a no ser
 que ese atributo o metodo sea obtenido a traves de un objeto*/









 ?>