<?php

class Zombie {
    
    #Atributos
    public $vida = 150;
    public $raza = 'inferior';

    #metodos

    public function golpear() {
        return rand(0, 15);
    }

    public function recibirGolpe($golpe) {
        $this->vida -= $golpe;
    }
}
