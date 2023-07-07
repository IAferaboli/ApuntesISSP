<?php

require_once "client.php";
require_once "localidad.php";
require_once "provincias.php";


// $user = Cliente::getByID(11);


// echo "Nombre: $user->nombre " . "<br> Apellido: $user->apellido " . "<br> Localidad: ";
// echo $user->Localidad()->nombre;
// echo "<br> C.P.: ";
// echo $user->Localidad()->codpostal;
// echo "<br> Prov.: ";
// echo $user->Localidad()->Provincia()->nombre;

$provincia = Provincia::getByID(1);

echo $provincia->nombre . "<br>";

var_dump($provincia->localidades());