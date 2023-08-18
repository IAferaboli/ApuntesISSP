<?php

class Conexion {
    public $conect;
    public function conectar() {
        $this->conect= mysqli_connect("localhost", "root", "", "universidad");
    }

    public function desconectar() {
        mysqli_close($this->conect);
    }
}