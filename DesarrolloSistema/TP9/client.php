<?php

require_once "conexion.php";
require_once "localidad.php";

class Cliente extends Conexion {
    
    public $nombre, $apellido, $codpostal, $id_cli;

    //Relación 1 a n inversa
    // public function Localidad() {
    //     $this->conectar();
    //     $prepare = mysqli_prepare($this->conect, "SELECT * FROM localidades WHERE codpostal = ?");
    //     $prepare->bind_param("i", $this->codpostal);
    //     $prepare->execute();
    //     $resposta = $prepare-> get_result();
    //     $localidad = $resposta->fetch_object(Localidad::class);
    //     return $localidad;
    // }

    // public static function getByID($id_cli){
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM clientes WHERE id_cli = ?");
    //     $prepare->bind_param("i", $id_cli);
    //     $prepare->execute();
    //     $resposta = $prepare->get_result();
    //     return $resposta->fetch_object(Cliente::class);
    // }
}