<?php
/*
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.
*/
require_once "ejercicio_20.php";

$auto1 = new Auto("ford", "Gris", 17000.0, "01-05-2000");
$auto2 = new Auto("Chevrolet", "Gris", 17000.0, "01-05-2000");
$auto3 = new Auto("BMW", "Blanco", 35500.0, "08-07-1998");
$auto4 = new Auto("Nisan", "Blanco", 357000.0, "08-07-1998");
$auto5 = new Auto("Fiat", "Negro", 277000.0, "05-12-1980");

$garage = new Garage("Garage de Prueba", 400);

$garage->Add($auto1);
$garage->Add($auto2);
$garage->Add($auto3);
$garage->Add($auto4);
$garage->Add($auto5);


echo $garage->MostrarGarage();

echo "<br>";
echo "<br>";
echo "Saco auto Bmw del Garage <br>";
echo "<br>";
echo "<br>";

echo $garage->Remove($auto1);
echo "<br>";

echo $garage->MostrarGarage();
echo "<br>";

Garage::AltaDeGarage($garage, "garage.csv");
echo Garage::LeerCsv("garage.csv");
?>