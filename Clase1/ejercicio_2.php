<?php
/*
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/ 

echo "Fecha " . date("Y/m/d") . "<br>";
echo "Fecha " . date("d.m.y") . "<br>";
echo "Fecha " . date("m-d-y") . "<br>";
$estacion = "";

switch (date("m")) 
{
    case 1:
        $estacion = "Verano";
        break;

    case 2:
        $estacion = "Verano";
        break;
        
    case 3:
        if( date("d") >= 21 )
        {
            $estacion = "Verano";
        }
        else if( date("d") <= 20 )
        {
            $estacion = "Otoño";
        }
        break;

    case 4:
         $estacion = "Otoño";
        break;

    case 5:
         $estacion = "Otoño";
        break;

    case 6:
        if( date("d") >= 21 )
        {
             $estacion = "Otoño";
        }
        else if( date("d") <= 20 )
        {
             $estacion = "Invierno";
        }
        break;
    
    case 7:
         $estacion = "Invierno";
        break;

    case 8:
         $estacion = "Invierno";
        break;
        
    case 9:
        if( date("d") >= 21 )
        {
             $estacion = "Invierno";
        }
        else if( date("d") <= 20 )
        {
             $estacion = "primavera";
        }
        break;

    case 10:
         $estacion = "primavera";
        break;

    case 11:
         $estacion = "primavera";
        break;

    case 12:
        if( date("d") >= 21 )
        {
             $estacion = "primavera";
        }
        else if( date("d") <= 20 )
        {
             $estacion = "Verano";
        }
        break;
}
print("La estacion es: $estacion<br>");

?>