<?php


require_once 'Persona.php';


class Usuario extends Persona {
  private $nick;

  private $pass;

  private $level;

  function __construct($nick,$pass,$level,$nombre,$dni){
    $this->nick=$nick;
    $this->pass=$pass;
    $this->level=$level;
    parent::__construct($nombre,$dni);
  }

  public function validarAcceso(int $nivel): bool
  {
    if ($this->get_level()==$nivel) {
          return true;
    }
    else{
      return false;
    }

  }

  public function guardarSesion()
  {
      session_start();
      $this->nick = $_SESSION['nick'];
      $this->pass= $_SESSION['pass'];
      $this->level=$_SESSION['level'];
     	parent::set_nombre($_SESSION['nombre']);
     parent::set_dni($_SESSION['dni']);
  }

  public function recuperarSesion()
  {
    session_start();
    $_SESSION['nick']= $this->nick;
    $_SESSION['pass']= $this->pass;
    $_SESSION['level']=$this->level;
    $_SESSION['nombre']=parent::get_nombre();
    $_SESSION['dni']= parent::get_dni();
  }

  public function guardarCookie()
  {
      setcookie("nick",$this->nick,time()+30,"/",null,0 );
      setcookie("pass",$this->pass,time()+30,"/",null,0 );
      setcookie("level",$this->level,time()+30,"/",null,0 );
      setcookie("nombre",parent::get_nombre(),time()+30,"/",null,0 );
      setcookie("dni",parent::get_dni(),time()+30,"/",null,0 );
  }

  public function recuperarCookie()
  {
       $this->nick = $_COOKIE['nick'];
      $this->pass= $_COOKIE['pass'];
      $this->level=$_COOKIE['level'];
      parent::set_nombre($_COOKIE['nombre']);
     parent::set_dni($_COOKIE['dni']);
  }

  public function borrarCookie(){
    unset($_COOKIE['nick']);
    unset($_COOKIE['level']);
    unset($_COOKIE['pass']);
    unset($_COOKIE['nombre']);
    unset($_COOKIE['dni']);
  }

  //get y set

    public function get_nick()
    {
      return $this->nick;
    }


    public function get_pass()
    {
      return $this->pass;
    }


    public function get_level()
    {
      return $this->level;
    }

    public function get_nombre()
    {
      return parent::get_nombre();
    }

    public function get_dni()
    {
      return parent::get_dni();
    }







}



?>
