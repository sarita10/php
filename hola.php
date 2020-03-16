<?php
//idea principal, lo que tiene todos los  objetos
class Usuario {
// Atributos(todas)
// Pueden ser Public or Private
    public $nombre;
    public $clave;

//Métodos
   public function login($clave){
        if($clave=$this->clave){
             echo "Clave Correcta";
             }else{
                 echo "Clave Incorrrecta";
             }

    }
    //Métodos mágicos
    public function construc($clave){
        $this-> clave=$clave;
        echo " Empieza\n ";
    }
    public function destruct($clave){
        echo " Adios\n ";
    }
}

//Objetos (individuales)
$j=new Usuario();
//Atributos objeto(ind)
$j->nombre="Juan";
$j->clave="y0soiC4n1";
$j->login=("cualquiera");
?>