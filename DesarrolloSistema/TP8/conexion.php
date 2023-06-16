<?php

class Conexion {
    public $conect;
    public function conectar() {
        $this->conect= mysqli_connect("localhost", "root", "", "poodatabase");
    }
}