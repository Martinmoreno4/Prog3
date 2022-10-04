<?php
/*
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/ 
$lapicera['color']=""; $lapicera['marca']=""; $lapicera['trazo']=""; $lapicera['precio']= 0;
$lapicera['color']="rojo"; $lapicera['marca']="bic"; $lapicera['trazo']="fino"; $lapicera['precio']= 10;
var_dump($lapicera);
echo"<br>";
$lapicera['color']="azul"; $lapicera['marca']="fabercastle"; $lapicera['trazo']="fino"; $lapicera['precio']= 20;
var_dump($lapicera);
echo"<br>";
$lapicera['color']="verde"; $lapicera['marca']="candela"; $lapicera['trazo']="gruezo"; $lapicera['precio']= 7;
var_dump($lapicera);
echo"<br>";
?>