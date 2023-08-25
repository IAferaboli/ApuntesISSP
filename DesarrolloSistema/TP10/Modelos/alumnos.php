<?php

require_once "conexion.php";


class Alumno extends Conexion {
    
    public $id, $nif, $nombre, $apellido1, $apellido2, $ciudad, $direccion, $telefono, $fecha_nacimiento, $sexo, $id_asignaturas;

    public function create() {
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "INSERT INTO alumno (nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $prepare->bind_param("ssssssiss", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo);
        $prepare->execute();

        $alumno = $this->getBynif($this->nif);
        $this->id = $alumno->id;

        foreach($this->id_asignaturas as $id_asignatura){
            $prepare = mysqli_prepare($this->conect, "INSERT INTO alumno_se_matricula_asignatura (id_alumno, id_asignatura, id_curso_escolar) VALUES (?, ?, 4)");
            $prepare->bind_param("ii", $this->id, $id_asignatura);
            $prepare->execute();
        }
    }
    
    public static function getAll(){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM alumno");
        $prepare->execute();
        $resposta = $prepare->get_result();

        $alumnos = array();
        while($alumno = $resposta->fetch_object(Alumno::class)) {
            array_push($alumnos, $alumno);
        }

        return $alumnos;
    }

    public static function getBynif($nif){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM alumno WHERE nif = ?");
        $prepare->bind_param("s", $nif);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Alumno::class);
    }

    public static function getByID($id){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM alumno WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Alumno::class);
    }
}