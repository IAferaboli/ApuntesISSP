<?php

//Ejercitacion 30'

//Crear array de 50 nros aleatorios - Inicio en el rand()


for($fin = 0; $fin <= 50; $fin++){
    $random = rand(1, 100);
    $random_num[$fin] = $random;

    //print_r($random_num);
}

$index_num = -1;

foreach ($random_num as $key => $num) {

    if($num == 5){
        $index_num = $key;
        break;
    }
    
}

if($index_num == -1){
    echo "El número 5 no está en el array.";
    echo "<br>";
} else{
    echo "El número 5 está en el array. En el index $index_num";
    echo "<br>";

}
// $num = 0;
// $founding_value = array_search($num == 5, $random_num, False);

// if($founding_value){
//     echo "El numero 5 está dentro del array. En el índice $founding_value.";
//     echo "<br>";
// } else{
//     echo "El numero 5 no está dentro del array.";
//     echo "<br>";
// }
