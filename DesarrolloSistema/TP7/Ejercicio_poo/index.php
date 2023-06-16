<?php

#traigo objetos
include_once 'zombie.php';
include_once 'humano.php';

#creo instancias
$human1 = new Humano;
$zombie1 = new Zombie;
// $zombie1->raza = 

echo 'Bienvenidos a una nueva batalla de la Humanidad vs Zombies. <br>';
echo "En esta oportunidad $human1->nombre representará a la humanidad luchando contra un zombie $zombie1->raza .<br>";

while ($human1->vida > 0 && $zombie1->vida > 0){
    $atacante = rand(0, 2);

    if($atacante == 0){
        #ataca el humano
        $golpe = $human1->golpear();
        $zombie1->vida -= $golpe;
        echo "$human1->nombre golpeó al zombie y le restó $golpe puntos de vida. Le quedan $zombie1->vida puntos de vida. <br>";
    } elseif ($atacante == 1){
        #ataca el zombie
        $golpe = $zombie1->golpear();
        $human1->vida -= $golpe;
        echo "El zombie golpeó a $human1->nombre y le restó $golpe puntos de vida. Le quedan $human1->vida puntos de vida. <br>";
    }
    else{
        #esquivan golpes
        echo 'Ambos han esquivado sus golpes. <br>';
    }

}

if($human1->vida <= 0 || $zombie1->vida <= 0){
    echo "La batalla ha finalizado. <br>";
    if($human1->vida <= 0){
        echo "El zombie $zombie1->raza ha vencido a $human1->nombre .<br>";
    } else {
        echo "$human1->nombre ha vencido al zombie $zombie1->raza. La humanidad sigue a salvo. <br>";
    }
}
