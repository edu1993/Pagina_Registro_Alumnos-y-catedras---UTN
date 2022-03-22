<?php
	
	 class Materias{
		


		public static function existe($materia):bool{
			$lineas = file("../database/listaCatedras.txt");
			   
		 	// Podemos mostrar / trabajar con todas las líneas:
			foreach($lineas as $linea){
	
				if (strstr($linea,$materia)){
	  				 return true;}
       
				}
			return false;
		}


		public static function lista(){
			$lineas = file("../database/listaCatedras.txt");
			array_filter($lineas);//elimina espacios vacios
			return $lineas;

		}
		
	}
?>