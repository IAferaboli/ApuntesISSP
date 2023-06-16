<?php

// function bienvenida($usuario = 'Invitado'){
//     echo "Bienvenido $usuario";
// }

// bienvenida('Juan Br');

// declare (strict_types=1);
// function sumar (int $numero1, int $numero2):int {
//     return $numero1 + $numero2;
// }

// echo sumar('uno', 22);


// declare (strict_types=1);
// function bienvenida(string $usuario = 'Invitado') {
//     echo "Bienvenido $usuario";
// }

// bienvenida("Feraboli");

// declare(strict_types=1);
// function sumar(int ...$numeros):int {
//     return array_sum($numeros);
// }
// echo sumar(1,2,3,4,5);

//Trabajo en clase

declare(strict_types=1);

// function suma_enteros(int $nro1, int $nro2):int {

//     if ($nro1 > $nro2){
//         echo "El número mayor es: $nro1", "<br>"; 
//     } elseif($nro1 < $nro2) {
//         echo "El número mayor es: $nro2", "<br>";
//     }else {
//         echo "Los números son iguales.", "<br>";
//     }
//     return $nro1 + $nro2;
// }
// echo suma_enteros(1, 4);

// funcion recibe int y array de int y retorna true de encontrar el int dentro del array,
//false de caso contrario

// function n_esta_en($nro, ...$nros) {
//
//     foreach ($nros as $valor) {
        
//         if($valor == $nro){
//             return true;
//         }
//     }
//     return false;
// }

// if (n_esta_en(1, 3, 4, 5, 3)){
//     echo "Tu nro está dentro del array.", "<br>";

// } else {
//     echo "Tu nro no está dentro del array.", "<br>";
// }

//funcion recibe string e int y retorna el string repetido tantas veces como el int lo indique

function repetir_str_int_veces(int $repe, string $word){


}

echo repetir_str_int_veces(4, 'Vicentin');