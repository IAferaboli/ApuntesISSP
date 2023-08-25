<?php


require_once "../Modelos/alumnos.php";
require_once "../Modelos/asignaturas.php";

$asignaturas = Asignatura::getAll_nombre();


//CARGAR ALUMNO/A

if(isset($_POST['nif']) || isset($_POST['nombre']) || isset($_POST['apellido1']) || isset($_POST['apellido2']) || isset($_POST['ciudad']) || isset($_POST['direccion']) || isset($_POST['telefono']) || isset($_POST['fecha_nacimiento']) || isset($_POST['sexo']) || isset($_POST['asignaturasSeleccionadas[]'])){
    $alumno = new Alumno;
    $alumno->nif = $_POST['nif'];
    $alumno->nombre = $_POST['nombre'];
    $alumno->apellido1 = $_POST['apellido1'];
    $alumno->apellido2 = $_POST['apellido2'];
    $alumno->ciudad = $_POST['ciudad'];
    $alumno->direccion = $_POST['direccion'];
    $alumno->telefono = $_POST['telefono'];
    $alumno->fecha_nacimiento = $_POST['fecha_nacimiento'];
    $alumno->sexo = $_POST['sexo'];
    $alumno->id_asignaturas = $_POST['asignaturasSeleccionadas'];
    $alumno->create();
}



require_once "../Views/createAlumno.view.php";