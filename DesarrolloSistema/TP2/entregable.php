<?php

//Se desea crear programa que permita calcular calificación final de 1 estudiante, considerando las
// siguientes notas y ponderaciones:
// -Nota del examen parcial (30%)
// -Nota del examen final (50%)
// -Nota de trabajos prácticos (20%)

// El programa debe cumplir los siguientes requisitos:
//  1.Solicitar al usuario que ingrese las tres notas (cada nota debe estar entre 0 y 10) y las ponderaciones
// correspondientes.
//  2.Calcular la calificación final del estudiante, teniendo en cuenta las ponderaciones.
//  3.Si la calificación final es mayor o igual a 6, mostrar un mensaje indicando que el estudiante aprobó el curso.
//  4.Si la calificación final es menor a 6, mostrar un mensaje indicando que el estudiante no aprobó el curso.
//  5.Si alguna de las notas ingresadas es menor a 4, mostrar un mensaje indicando que el estudiante no aprobó el
// curso, sin importar la calificación final.
//  6.Mostrar en pantalla la calificación final obtenida.

// El programa debe ser capaz de manejar errores en la entrada de datos (por ejemplo, si el usuario ingresa una nota
// fuera del rango permitido) y debe utilizar los operadores aritméticos, operadores lógicos, operadores de
// comparación y de asignación combinada, así como los operadores de flujo condicional if, if ternario, switch y
// match.


//V.1.0 Estoy investigando como lograr que dado el caso de ingreso de una nota valor "4" cancele el resto del proceso.
// inicié creando una función donde se soliciten las 3 notas pero sólo daba lugar a un valor.

function parcial($nota_exa_parcial){
    
    if(($nota_exa_parcial < 0) || ($nota_exa_parcial > 10)){
        echo "Error al cargar nota. Debe estar entre 0 y 10." . "<br>";
    } else {
        echo(($nota_exa_parcial < 4) ? "Alumno No Aprobado" : "Nota de examen parcial registrada") . "<br>";
        return $nota_exa_parcial;
    };
};

function exa_final($nota_exa_final){

    if(($nota_exa_final < 0) || ($nota_exa_final > 10)){
        echo "Error al cargar nota. Debe estar entre 0 y 10." . "<br>";
    } else {
        echo(($nota_exa_final < 4) ? "Alumno No Aprobado" : "Nota de examen final registrada") . "<br>";
        return $nota_exa_final;
    };
};

function tps($nota_tps){
    if(($nota_tps < 0) || ($nota_tps> 10)){
        echo "Error al cargar nota. Debe estar entre 0 y 10." . "<br>";
    } else {
        echo(($nota_tps < 4) ? "Alumno No Aprobado" : "Nota de trabajos prácticos registrada") . "<br>";
        return $nota_tps;
    };
};

// parcial(8);
// exa_final(9);
// tps(6);

$final_note = ((parcial(4) * 0.3) + (exa_final(9) * 0.5) + (tps(6) * 0.2));


if($final_note >= 6){
    echo "Alumno Aprobado. Nota final: $final_note" . "<br>";
} else {
    echo "Alumno No Aprobado. Nota final: $final_note" . "<br>";
}

//switch($final_note){
//     case ($final_note >= 6):
//         echo "Alumno Aprobado. Nota final: $final_note" . "<br>";
//     case ($final_note < 6):
//         echo "Alumno No Aprobado. Nota final: $final_note" . "<br>";
// };