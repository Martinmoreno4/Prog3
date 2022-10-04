<?php
/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/ 

function invertir($string)
{
    $len = count($string);
    $stringInv = '';

    for($i=$len-1;$i>-1;$i--)
    {
        $stringInv .=$string[$i]; //appends string to stringInv
    }

    return $stringInv;
}

$hola = invertir(array("h","o","l","a"));
echo $hola;
?>