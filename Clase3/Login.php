<?php

require_once "ejercicio_22.php";

$tarea = $_GET["tarea"];
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];

//var_dump($tarea);



switch ($tarea) {
    case "login":
        if(Usuario::ValidarUsuario($mail, $clave, "usuarios.csv")){
            echo "Verificado";
        }else{
            echo "Error en los Datos";
        }
        break;
}

?>