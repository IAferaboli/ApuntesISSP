<?php


include_once "../Modelos/profesores.php";
include_once "../Modelos/departamentos.php";

$departamentos = Departamento::getAll();


//CARGAR PROFESOR/A

if(isset($_POST['nif']) || isset($_POST['nombre']) || isset($_POST['apellido1']) || isset($_POST['apellido2']) || isset($_POST['ciudad']) || isset($_POST['direccion']) || isset($_POST['telefono']) || isset($_POST['fecha_nacimiento']) || isset($_POST['sexo']) || isset($_POST['id_departamento'])){
    $profesor = new Profesor;
    $profesor->nif = $_POST['nif'];
    $profesor->nombre = $_POST['nombre'];
    $profesor->apellido1 = $_POST['apellido1'];
    $profesor->apellido2 = $_POST['apellido2'];
    $profesor->ciudad = $_POST['ciudad'];
    $profesor->direccion = $_POST['direccion'];
    $profesor->telefono = $_POST['telefono'];
    $profesor->fecha_nacimiento = $_POST['fecha_nacimiento'];
    $profesor->sexo = $_POST['sexo'];
    $profesor->id_departamento = $_POST['id_departamento'];
    $profesor->create();

}

require_once "../Views/createProfesor.view.php";