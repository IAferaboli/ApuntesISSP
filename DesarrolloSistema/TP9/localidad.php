<?php

require_once "conexion.php";
require_once "provincias.php";

class Localidad extends Conexion {
    
    public $nombre, $codpostal, $id_prov;

    // public function Provincia() {
    //     $this->conectar();
    //     $prepare = mysqli_prepare($this->conect, "SELECT * FROM provincias WHERE id_prov = ?");
    //     $prepare->bind_param("i", $this->id_prov);
    //     $prepare->execute();
    //     $resposta = $prepare-> get_result();
    //     $province = $resposta->fetch_object(Provincia::class);
    //     return $province;
    // }
}