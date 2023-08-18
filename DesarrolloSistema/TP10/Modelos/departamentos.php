<?php

require_once "conexion.php";


class Departamento extends Conexion {
    
    public $nombre, $id;

    
    public static function getByID($id){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM departamento WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Departamento::class);
    }

    public static function getAll(){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM departamento");
        $prepare->execute();
        $resposta = $prepare->get_result();

        $departamentos = array();
        while($departamento = $resposta->fetch_object(Departamento::class)) {
            array_push($departamentos, $departamento);
        }

        return $departamentos;
    }
}