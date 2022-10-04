<?php
/*Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.*/

function condicionBooleana($palabra, $max)
{
    if((strlen($palabra) <= $max) || !strcmp($palabra,"Recuperatorio") || !strcmp($palabra,"Parcial") || !strcmp($palabra,"Programacion") )
    {
        return 1;
    }
    else
    {
        return 0;  
    }
}
$palabraUsada = "hola";
$num = condicionBooleana($palabraUsada, 2);
echo "la palabra es $palabraUsada<br>";
echo "la funcion devuelve $num<br>";

?>