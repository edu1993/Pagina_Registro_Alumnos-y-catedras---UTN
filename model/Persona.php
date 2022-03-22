<?php


require_once 'Catedra.php';


class Persona {
 	 	private $nombre;

  		private $dni;


	function __construct($nombre, $dni){
		$this->nombre=$nombre;
		$this->dni =$dni;
	}

	function get_dni(){
		return $this->dni;
	}

	function get_nombre(){
		return $this->nombre;
	}

	function set_nombre($nombre){
			$this->nombre=$nom;
	}

	function set_dni($dni){
		$this->dni= $dn;

	}

}



?>
