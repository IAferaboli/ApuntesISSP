<?php

require_once "../Modelos/alumnos.php";

$alumno = Alumno::getByID(39);
$asignaturas = $alumno->getAsignaturas();
foreach($asignaturas as $asignatura){
    echo $asignatura->nombre . '<br>';
}
