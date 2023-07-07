<?php

class Conexion {
    public $conect;
    public function conectar() {
        $this->conect= mysqli_connect("localhost", "root", "", "tp9_bbdd");
    }

    public function desconectar() {
        mysqli_close($this->conect);
    }
}