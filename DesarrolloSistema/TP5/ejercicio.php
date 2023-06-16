<?php

//1 funcion con variable global y local que imprime valor de la global

// $global_scope = 12;

// function modifica_variable($local_scope){
//     $local_scope = $local_scope++;
//     global $global_scope;
//     return $global_scope;
// };

// echo modifica_variable(22);

//2 función con variable local y estática, incrementa el valor de la estática e imprime el valor de ambas.
// luego llamar función varias veces y observar cómo varian los valores

// function static_local_scope($static_variable, $local_scope){
//     $static_variable += 2;
//     return "La variable estática vale: $static_variable". "<br>" . "La variable local vale: $local_scope" . "<br>";
// }

// for($i = 0; $i <= 5; $i++){
//     echo static_local_scope(4, 2);
// }

//3 funcion con variable global y local con mismo nombre. La misma imprime el valor de ambas
//cambiar valor de variable local. Imprimir ambos valores nuevamente.

$scopes = 12;
function mismo_nombre_variable($local){
    global $scopes;
    $scopes = $local;
    echo "La variable global vale: $scopes". "<br>" . "La variable local vale: $scopes" . "<br>";
};

echo $scopes;

mismo_nombre_variable(11);

