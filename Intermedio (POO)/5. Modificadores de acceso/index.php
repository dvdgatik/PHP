<?php 



/*
Modificadores de acceso:
Son simples propiedades que podemos añadir a nuestros metodos
y atributos de nuestra clase, y estas nos ayudaran con los accesos y la extraccion de metodos o atributos.

Public: Esta propiedad es muy simple, se puede realizar de todo con el atributo o el metodo. donde sea cuando sea por quien sea.

Private: Un metodo privado solo puede ser llamado desde otro metodo de la clase. No podemos llamar a un metodo privado desde donde definimos un objeto

Protected: Un atributo o metodo protected puede ser accedido por la clase, por todas las subclases pero no por los objetos que definimos en dichas clases.


*/
Class Facebook {

	//Atributos
	public $nombre;
	public $edad;
	private $pass; //los atributos private pueden ser accedidos por metodos que esten en la misma clase de igual manera protected

	//Metodos
	public function __construct($nombre, $edad, $pass){
		$this->nombre = $nombre; //Llamamos al atributo nombre y le asignamos lo que recibimos por parametro
		$this->edad = $edad;
		$this->pass = $pass;
	}

	public function verinformacion() {
		echo "Nombre: ".$this->nombre."<br>"; //imprimimos el valor del atributo declarado en el metdo constructor
		echo "Edad: ".$this->edad."<br>";
		$this->cambiarPass('54321'); //modemos llamar el metodo privado dentro de la clase
		//self::cambiarpass();
		echo "Password: ".$this->pass."<br>";
	}
	Private Function cambiarpass($pass) {
		$this->pass = $pass;
	}
}

$facebook = new Facebook("Carlos Hernandez",20,"1234"); //Declaramos el objeto facebook
//echo $facebook->pass;//No se puede acceder debido a que es privado y esta fuera de la clase
//$facebook->cambiarpass("4321");//No se puede acceder debido a que es privado al llamarlo esta fuera de la clase
$facebook->verinformacion(); //ejecuto metodo




 ?>
