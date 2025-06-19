<?php

//Ejercicio 9: Crea una función llamada generarTablaMultiplicar que tome un número entero como parámetro y mostrar los resultados (del 1 al 10) uno debajo del otro por pantalla.
//Complejidad: BAJA (1 punto)

function generarTablaMultiplicar($num) {
    for ($f = 1; $f <= 10; $f++) {
        $res = $num * $f;
        echo $res ."<br>";
    }

}
generarTablaMultiplicar(3);