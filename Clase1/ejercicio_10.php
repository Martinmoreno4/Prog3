<?php
/*
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/ 
$asociativo = array
(
    "lapicera 1" => array('color'=>"rojo", 'marca'=>"bic", 'trazo'=>"fino", 'precio'=> 10),   
    "lapicera 2" => array('color'=>"azul", 'marca'=>"fabercastle", 'trazo'=>"fino", 'precio'=> 20),
    "lapicera 3" => array('color'=>"verde", 'marca'=>"candela", 'trazo'=>"gruezo", 'precio'=> 7)
);

$indexado["lapicera 1"]=array('color'=>"rojo", 'marca'=>"bic", 'trazo'=>"fino", 'precio'=> 10);
$indexado["lapicera 2"]=array('color'=>"azul", 'marca'=>"fabercastle", 'trazo'=>"fino", 'precio'=> 20);
$indexado["lapicera 3"]=array('color'=>"verde", 'marca'=>"candela", 'trazo'=>"gruezo", 'precio'=> 7);

var_dump($asociativo);
echo"<br><br>";
var_dump($indexado);
//$lapicera1['color']="rojo"; $lapicera1['marca']="bic"; $lapicera1['trazo']="fino"; $lapicera1['precio']= 10;
//$lapicera2['color']="azul"; $lapicera2['marca']="fabercastle"; $lapicera2['trazo']="fino"; $lapicera2['precio']= 20;
//$lapicera3['color']="verde"; $lapicera3['marca']="candela"; $lapicera3['trazo']="gruezo"; $lapicera3['precio']= 7;


?>