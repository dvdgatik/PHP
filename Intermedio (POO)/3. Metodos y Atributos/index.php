<?php 
/*Desde los metodos podemos acceder as los atributos con la palabra reservada $this*/
class Persona {
	//atributos
	public $nombre  = array();
	public $apellido = array();

	//metodos

	public function guardar($nombre, $apellido) {
		$this->nombre[] = $nombre; //Hace Referencia a un atributo u otro metodo desde este metodo
        $this->apellido[] = $apellido;
	}

	public function mostrar() {
		for ($i=0;$i<count($this->nombre);$i++) {
			//Formas de declarar un metodo dentro de otro metodo
            self::formato($this->nombre[$i], $this->apellido[$i]);
            Persona::formato($this->nombre[$i], $this->apellido[$i]);
            $this->formato($this->nombre[$i], $this->apellido[$i]);
		}

	}

	public function formato($nombre, $apellido) {

		echo "Nombre: ".$nombre." | Apellido:  ".$apellido."</br>"; /*Mostrar la lista de personas dentro del array 
		a lo que estoy recibiendo como parametro*/
		//Fromas de llamar metodo dentro de otro metodo

	}

	}



$persona = new Persona();
$persona->guardar("Carlos","Fernandes");
$persona->guardar("Uriel","Hernandez");
$persona->mostrar();




 ?>