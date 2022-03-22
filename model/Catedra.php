<?php

require_once 'materias.php';
require_once 'Persona.php';


class Catedra {
  private $materia;

  private $archivo;

  private  $Alumnos;

  private $Profesor;

  function __construct($materia,$nomProf,$dniProf,$control){



		 $this->materia = $materia;
	 	 $this->Alumnos=array();//declaro un array vacio
	 	 $this->Profesor = new Persona($nomProf,$dniProf);

	 //almacena la materia en la lista de catedras
	 if ($control==1) {

	 	 $manejador=fopen("../database/listaCatedras.txt","a");
	    fwrite($manejador,"\n".$materia);
	    fclose($manejador);

	    $this->archivo="../database/".$materia.".txt";//ruta de la catedra
	    $this->guardarCatedra();
	 }
 }










  public  function guardarCatedra()//guarda la catedra usando serialize
  {

		$manejador=fopen($this->archivo,"w+");
		fwrite($manejador,serialize($this));
		fclose($manejador);

  }

  public  function recuperarCatedra($materia)//recupera la catedra usando unseriallize
  {
		$this->archivo="../database/".$materia.".txt";
		$manejador=fopen($this->archivo,"r");
		$catedra=(object)unserialize(fgets($manejador));
		$this->materia=$catedra->materia;
		$this->Profesor=$catedra->Profesor;
		$this->Alumnos=$catedra->Alumnos;
		fclose($manejador);


  }

  public function addAlumno(Persona $alumno)
  {
		array_push($this->Alumnos,$alumno);
      	$this->guardarCatedra();
  }






//get y set

public function get_profesor(){
	return $this->Profesor->get_nombre();
}

public function get_catedra(){
	return $this->materia;
}

public function get_alumnos(){

      return $this->Alumnos;
}

}//cierre clase




?>
