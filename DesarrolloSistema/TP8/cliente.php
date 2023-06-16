<?php

require_once "conexion.php";

class Cliente extends Conexion {
    public $nombre, $apellido, $fecnac, $email,$id_cliente;

    //Create-Cargar
    public function create() {
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "INSERT INTO clientes (nombre, apellido, fecnac, email) VALUES (?, ?, ?, ?)");
        $prepare->bind_param("ssss", $this->nombre, $this->apellido, $this->fecnac, $this->email);
        $prepare->execute();
    }

    
    //Create-Cargar
    public function update() {
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "UPDATE clientes SET nombre = ?, apellido = ?, fecnac = ?, email = ? WHERE id_cliente = ?");
        $prepare->bind_param("ssssi", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->id_cliente);
        $prepare->execute();
    }

    public function delete(){
        $this->conectar();
        $prepare = mysqli_prepare($this->conect, "DELETE FROM clientes WHERE id_cliente = ?");
        $prepare->bind_param("i", $this->id_cliente);
        $prepare->execute();
    }


    //Consulta todos registros
    public static function all(){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM Clientes");
        $prepare->execute();
        $resposta = $prepare->get_result();

        $clientes = array();
        while($cliente = $resposta->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }

        return $clientes;
    }

    //Obtener Cliente por id
    public static function getByID($id_cliente){
        $conexion = new Conexion();
        $conexion->conectar();
        $prepare = mysqli_prepare($conexion->conect, "SELECT * FROM Clientes WHERE id_cliente = ?");
        $prepare->bind_param("i", $id_cliente);
        $prepare->execute();
        $resposta = $prepare->get_result();
        return $resposta->fetch_object(Cliente::class);
    }
}