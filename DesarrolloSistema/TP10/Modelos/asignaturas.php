<?php

require_once "conexion.php";
require_once "../Modelos/asignaturas.php";


class Asignatura extends Conexion {
    
    public $nombre, $id, $creditos, $tipo, $curso, $cuatrimestre, $id_profesor, $id_grado;

    
    public static function getByID($id){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM asignatura WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Asignatura::class);
    }

    public static function getAll_nombre(){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT nombre, id FROM asignatura");
        $prepare->execute();
        $resposta = $prepare->get_result();

        $asignaturas = array();
        while($asignatura = $resposta->fetch_object(Asignatura::class)) {
            array_push($asignaturas, $asignatura);
        }

        return $asignaturas;
    }
}