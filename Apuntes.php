<?php 

class Usuario { 
  
  // Atributos
  
  public $nombre;
  public $clave;
  
  // Métodos {}
  
  function login($clave){
	  
	  if($clave==$this->clave){
		  echo "clave correcta";
	  }else{
		  echo "clave incorrecta";
	  }
  }
  
  public function __construct($clave) {
	  $this->clave=$clave;
	  echo "Empiezo a vivir\n";
  } 
  
  public function __destruct() {
		echo "Hasta siempre\n";
  } 
  
}

echo "Aquí empieza el programa\n";

$j=new Usuario("y0soiC4n1");
$j->nombre="Juan";

echo "Me llamo " . $j->nombre . "\n";

$j->login("y0soi*****");

?>