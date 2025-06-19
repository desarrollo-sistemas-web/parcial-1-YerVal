<?php

//Ejercicio 3: Crea una función que tome un número entero como parámetro y devuelva true si el número es par y false si es impar.
//Complejidad: MEDIA (2 puntos)

function esPar($num) {
    $num = 2;
    if ( $num % 2 == 0) {
        echo "true";
    } else {
        echo "false";
    }
    switch (true) {
        case ($num%2==0):
            echo "true";
            break;
        case ($num%2!=0):
            echo "false";
            break;
    }
}