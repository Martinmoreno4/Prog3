<?php
/*Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.*/ 
$suma = 0;
$numero = 1;
$numeroAnt = 0;

while($suma < 1000)
{

    $suma = $numero + $numeroAnt;
    
    if($suma<1000)
    {
        echo "$numero) $numeroAnt + $numero = $suma <br>";
    }
    $numero ++;
    $numeroAnt= $suma;
}

?>
