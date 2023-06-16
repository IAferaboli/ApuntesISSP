<?php

include_once "cliente.php";

//CREATE
$usuario = new Cliente;
if(isset($_POST['uname']) && isset($_POST['apel']) && isset($_POST['fecnac']) && isset($_POST['email']) && isset($_POST['psw'])){
$usuario->nombre = $_POST['uname'];
$usuario->apellido = $_POST['apel'];
$usuario->fecnac = $_POST['fecnac'];
$usuario->email = $_POST['email'];
$usuario->contraseña = $_POST['psw'];
$usuario->create();
}

