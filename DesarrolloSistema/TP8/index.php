<?php

include_once "cliente.php";

//CREATE
// $usuario = new Cliente;
// $usuario->nombre = "Daniel";
// $usuario->apellido = "Craig";
// $usuario->fecnac = "1970-10-24";
// $usuario->email = "dancraig@dcraig.com";
// $usuario->create();

//UPDATE
// $cliente = Cliente::getByID(5);
// $cliente->nombre = "Danielito";
// $cliente->apellido = "Craion";
// $cliente->update();

//DELETE
// $cliente = Cliente::getByID(5);
// $cliente->delete();

//READ
$clientes = Cliente::all();
foreach ($clientes as $cliente) {
    echo $cliente->nombre . " " . $cliente->apellido . " " . $cliente->fecnac . " " . $cliente->email . " " . "<br>";
}
