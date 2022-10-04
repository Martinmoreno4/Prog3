<?php
/*
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/ 
$numeros = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
$comp = 0;
foreach($numeros as $val)
{
    $comp = $val + $comp;
}

$comp=$comp/5;

if($comp > 6)
{
    echo "el promedio es $comp<br>";
    echo "el promedio es mayor a 6<br>";
}
else if($comp < 6)
{
    echo "el promedio es $comp<br>";
    echo "el promedio es menor a 6<br>";
}
else if($comp == 6)
{
    echo "el promedio es 6<br>";
}

?>