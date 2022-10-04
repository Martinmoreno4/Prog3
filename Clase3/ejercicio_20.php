<?php

/*
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

*/

require_once "ejercicio_19.php";

class Garage
{

   private $_razonSocial;
   private $_precioPorHora;
   private $_autos;

/*
Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.
*/

public function __construct($_razonSocial, $_precioPorHora)
{
   $this->_razonSocial = $_razonSocial;
   $this->_precioPorHora = $_precioPorHora;
   $this->_autos = array();
}

/*
Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
*/

   public function MostrarGarage()
   {
      $i = 1;
      $cadena = "Razon Social: " . $this->_razonSocial . ",Precio por hora: $" . $this->_precioPorHora . "<br>";
      if (count($this->_autos) != 0) 
      {
         $cadena .= "Autos alojados:<br>";

         foreach ($this->_autos as $auto) 
         {
            $cadena .= $i++ . ") " . Auto::MostrarAuto($auto)."<br>";
         }
         return $cadena;
      } 
      else
      {
         return $cadena .= "No hay autos en el garage<br><br>";
      }
   }

   /*
   Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
   objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
   */

   public function Equals(Auto $autoPasado)
   {
      $alojado = "";
      foreach ($this->_autos as $clave => $auto) 
      {
         if ($auto->Equals($autoPasado, $auto)) 
         {
            $alojado = $clave;
            break;
         } 
      }
      return $alojado;
   }

   /*
   Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
   (sólo si el auto no está en el garaje, de lo contrario informarlo).
   Ejemplo: $miGarage->Add($autoUno);
   */

   public function Add(Auto $autoPasado)
   {
      if ($this->Equals($autoPasado)=="") 
      {
         array_push($this->_autos, $autoPasado);
         return true;
      } 
      else 
      {
         return false;
      }
   }

   /*
   Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
   “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
   Ejemplo: $miGarage->Remove($autoUno);
   */

   public function Remove(Auto $autoPasado)
   {
      $siEstaEIndice = $this->Equals($autoPasado);
      if ($siEstaEIndice>=0) 
      {
         unset($this->_autos[1]);
         array_values($this->_autos);
         return "Se eliminó el auto.<br><br>";
      } 
      else 
      {
         return "El auto no se encuentra en el garage.<br><br>";
      }
   }


/*
Crear un método de clase para poder hacer el alta de un Garage y, guardando los datos en un
archivo garages.csv.
Hacer los métodos necesarios en la clase Garage para poder leer el listado desde el archivo
garage.csv
Se deben cargar los datos en un array de garage.
*/

   public static function AltaDeGarage($garage, $nombre)
   {
      $archivo = fopen($nombre , "w+");
      $cadena = "Razon Social: " . $garage->_razonSocial . ",Precio por hora: $" . $garage->_precioPorHora . "<br>";
      fwrite($archivo, $cadena.PHP_EOL);

      foreach($garage->_autos as $auto)
      {
         fwrite($archivo, Auto::MostrarAuto($auto).PHP_EOL);
      }

      fclose($archivo);
   }

   public static function LeerCsv($nombre)
   {
       $archivo = fopen($nombre , "r+");
   
       echo fread($archivo, filesize($nombre));
   
       fclose($archivo);
   }
}

/*
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.
*/
?>