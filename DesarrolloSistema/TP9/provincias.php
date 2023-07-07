<?php

require_once "conexion.php";
require_once "localidad.php";

class Provincia extends Conexion {
    
    public $nombre, $id_prov;

    public function localidades() {
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "SELECT * FROM localidades WHERE id_prov = ?");
        $prepare->bind_param("i", $this->id_prov);
        $prepare->execute();
        $resposta = $prepare-> get_result();
        $localidades = [];
        while($localidad = $resposta->fetch_object(Localidad::class)) {
            array_push($localidades, $localidad);
        }
        return $localidades;
    }

    public static function getByID($id_prov){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM provincias WHERE id_prov = ?");
        $prepare->bind_param("i", $id_prov);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Provincia::class);
    }

}
