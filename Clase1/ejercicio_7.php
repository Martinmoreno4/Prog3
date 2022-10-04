<?php
/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/ 
$num = 1;
$array1 = array();

while( count($array1) < 10 )
{
    if($num % 2 != 0)
    {
        array_push($array1,$num);
    }
    $num++;
}

foreach($array1 as $val)
{
    echo "$val<br>";
}

?>