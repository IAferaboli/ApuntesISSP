<?php

class Humano {
    
    #Atributos
    public $vida = 150;
    public $nombre = 'Gilbert';

    #metodos

    public function golpear() {
        return rand(1, 21);
    }

    public function recibirGolpe($golpe) {
        $this->vida -= $golpe;
    }
}