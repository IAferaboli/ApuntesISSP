<?php

require_once "conexion.php";


class Profesor extends Conexion {
    
    public $id, $nif, $nombre, $apellido1, $apellido2, $ciudad, $direccion, $telefono, $fecha_nacimiento, $sexo, $id_departamento;

    
    public function create() {
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "INSERT INTO profesor (nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo, id_departamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $prepare->bind_param("ssssssissi", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo, $this->id_departamento);
        $prepare->execute();
    }
    
    public static function getAll(){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM profesor");
        $prepare->execute();
        $resposta = $prepare->get_result();

        $profesores = array();
        while($profesor = $resposta->fetch_object(Profesor::class)) {
            array_push($profesores, $profesor);
        }

        return $profesores;
    }

    public function departamento(){
        return Departamento::getByID($this->id_departamento);
    }

    public static function getByID($id){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM profesor WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Profesor::class);
    }
}