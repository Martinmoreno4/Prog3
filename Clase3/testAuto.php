<?php
/*
En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)
*/
require_once "ejercicio_19.php";

$auto1 = new Auto("ford", "Gris", 17000.0, "01-05-2000");
$auto2 = new Auto("ford", "Gris", 17000.0, "01-05-2000");
$auto3 = new Auto("BMW", "Blanco", 35500.0, "08-07-1998");
$auto4 = new Auto("BMW", "Blanco", 357000.0, "08-07-1998");
$auto5 = new Auto("Fiat", "Negro", 277000.0, "05-12-1980");
$impuestos = 1500.0;

$auto3->AgregarImpuestos($impuestos);
echo Auto::MostrarAuto($auto3);
echo "<br>";

$auto4->AgregarImpuestos($impuestos);
echo Auto::MostrarAuto($auto4);
echo "<br>";

$auto5->AgregarImpuestos($impuestos);
echo Auto::MostrarAuto($auto5);
echo "<br>";

echo "El precio sumado del auto 1 y el auto 2 es: ".Auto::Add($auto1, $auto2). "<br>";
echo "<br>";

if(Auto::Equals($auto1, $auto2))
{
    echo "El auto 1 y el auto 2 son de la misma marca <br>";
    echo "<br>";
}
else
{
    echo "El auto 1 y el auto 2 NO son de la misma marca <br>";
    echo "<br>";
}

if(Auto::Equals($auto1, $auto5))
{
    echo "El auto 1 y el auto 5 son de la misma marca <br>";
    echo "<br>";
}
else
{
    echo "El auto 1 y el auto 5 NO son de la misma marca <br>";
    echo "<br>";
}

echo Auto::MostrarAuto($auto1);
echo "<br>";
echo Auto::MostrarAuto($auto3);
echo "<br>";
echo Auto::MostrarAuto($auto5);
echo "<br>";

$autos = [];

array_push($autos,$auto1,$auto2,$auto3);

Auto::AltaDeAutos($autos, "autos.csv");
echo Auto::LeerCsv( "autos.csv");
echo "<br>";

?>