<?php

class Conexion {
    public $conect;
    public function conectar() {
        $this->conect= mysqli_connect("localhost", "root", "", "poodatabase");
    }

    public function desconectar() {
        mysqli_close($this->conect);
    }
}