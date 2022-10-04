<?php
/*
Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/ 

$a=5;
$b=4;
$c=3;
echo "valor A es = $a<br>";
echo "valor B es = $b<br>";
echo "valor C es = $c<br>";
if((($a < $b) && ($a > $c)) || (($a < $c) && ($a > $b)))
{
    echo "El valor medio es = $a<br>";
}
else if((($b < $c) && ($b > $a)) || (($b < $a) && ($b > $c)))
{
    echo "El valor medio es = $b<br>";
}
else if((($c < $b) && ($c > $a)) || (($c < $a) && ($c > $b)))
{
    echo "El valor medio es = $c<br>";
}
else
{
    echo "No hay valor del medio<br>";
}


?>