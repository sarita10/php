<?php 

class Persona { 
  
  
  public $nombre;
  public $apellidos;
  public $trabajo;
  public $sexo;
  public $nacimiento;
  public $fallecimiento;
  private $contraseñamóvil;
  protected $residencia;
  private static $hijos = 0;
  
  function Trabajar($trabajo){
	  
	  if($clave==$this->niguno){
		  echo "no tienes dinero";
	  }else{
		  echo "tienes dinero";
	  }
  }
  
  public function __construct($nacimiento) {
	  $this->nacimiento=$nacimiento;
	  echo "Empiezo a vivir\n";
  } 
  
  public function __destruct(fallecimiento) {
      $this->fallecimiento=$fallecimiento
		echo "Hasta siempre\n";
  } 
  
}

class Padre extends Persona { 
    public function castigar($Hijo) {
        echo $Padre->hijo "¡Castigado sin jugar!";
    
    }  
}
class Hijo extends Persona{
    
}




$m=new Persona("María");
$m->nombre="María";
$m->apellidos="Hidalgo Portillo"
$m->trabajo="Ninguno"
$m->Nacimiento="21 noviembre 2004"
$m->Fallecimiento="-"
$m->contraseñamóvil="1022"
$m->residencia="Ibiza,25"

echo "Me llamo  " . $j->nombre . $j->apellidos. "\n";

$m->Trabajar("María");






?>