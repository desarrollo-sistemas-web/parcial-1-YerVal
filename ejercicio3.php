<?php

//Ejercicio 3: Crea una función que tome un número entero como parámetro y devuelva true si el número es par y false si es impar.
//Complejidad: MEDIA (2 puntos)

function esPar($num) {
    switch (true) {
        case ($num%2==0):
            return true;
            break;
        case ($num%2!=0):
            return false;
            break;
    }
}