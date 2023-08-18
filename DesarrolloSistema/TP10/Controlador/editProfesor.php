<?php

require_once '../Modelos/profesores.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);

if($profesor){
    require_once '../Views/editProfesor.view.php';

}else {
    echo "El profesor buscado no está en la base.";
}