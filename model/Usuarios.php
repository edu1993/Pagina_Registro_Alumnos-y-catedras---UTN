<?php


require_once 'Usuario.php';


class Usuarios {
  private $pathName;
  private $Registrados;



  public  function guardarArchivo()
  {
    
  }

  public  function recuperarArchivo($nick)
  {
      $archivo="database/users/".$nick.".txt";
      $manejador=fopen($archivo,"r");
      $this->Registrados=(object)unserialize(fgets($manejador));
      fclose($manejador);
      return   $this->Registrados;  
  }

  public  function autenticar(Usuario $login):bool
  {
      if (self::existe($login->get_nick())) {
        $this->recuperarArchivo($login->get_nick());
        if (strstr($this->Registrados->get_pass(),$login->get_pass())) {
         return true;
        }
        else{
          return false;
        }
      }
      
      return false;
   
  }



  public function addrRegistrado(Usuario $nuevo)
  {    
      $archivo="database/users/".$nuevo->get_nick().".txt";
      $manejador=fopen($archivo,"a");
      fwrite($manejador,serialize($nuevo));
      fclose($manejador);

      $manejador=fopen("database/users/listaUsuarios","a");
      fwrite($manejador,"\n".$nuevo->get_nick());
      fclose($manejador);
  }

 

  public function set_pathName($path){
      
  }



    public static function existe($nick):bool{
      $lineas = file("database/users/listaUsuarios.txt");
      
      // Podemos mostrar / trabajar con todas las líneas:
      foreach($lineas as $linea){
  
        if (strstr($linea,$nick)){
             return true;}
       
        }
      return false;
    }


}
?>
