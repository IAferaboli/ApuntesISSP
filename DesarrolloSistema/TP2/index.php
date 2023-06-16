<?php

//clases

// $nombre = "German";
// $apellido = "Feraboli";


// $nombre_completo = '$nombre $apellido';
// $nombre_apellido = "$nombre y $apellido";

// echo "El nombre completo es $nombre_completo";
// echo "El nombre completo es $nombre_apellido";

//Ejercicios
//1-

$alumno_nota_1 = 6;
$alumno_nota_2 = 8;
$alumno_nota_3 = 5;

$promedio_alumno = ($alumno_nota_1 + $alumno_nota_2 + $alumno_nota_3) / 3;

if($promedio_alumno >= 6) {
    echo "Alumno arobado. $promedio_alumno <br>";
} else {
    echo "Alumno reprobado. $promedio_alumno <br>";
};

//2-
$datos_personas = [
    ["nombre_completo" => "Panilo Derez",
     "edad" => 29,
     "ciudad_residencia" => "Empalme V.C."
    ],
    ["nombre_completo" => "Calentin Vamiletti",
     "edad" => 24,
     "ciudad_residencia" => "V.C."
    ],
    ["nombre_completo" => "Lsteban Edesma",
     "edad" => 21,
     "ciudad_residencia" => "Empalme V.C."
    ],

];

print_r($datos_personas);
echo "<br>";
echo "<br>";

var_dump($datos_personas);