<?php

require_once "ejercicio_21_2.php";

$tarea = $_GET["tarea"];
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];

//var_dump($tarea);

switch ($tarea) {
    case 'show':
        if(Usuario::LeerCSV()){
            echo "Usuarios cargados correctamente";
        }else{
            echo "Error al cargar los usuarios";
        }
        break;
    case 'create':
        $usuario = new Usuario($nombre, $clave, $mail);
        if($usuario->GuardarCSV()){
            echo "Usuario creado correctamente";
        }
        break;
}

?>