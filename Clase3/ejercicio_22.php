<?php

/*
Aplicación No 22 ( Login)
Archivo: Login.php
método:POST

Recibe los datos del usuario(clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
Retorna un :
“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado si no coincide el mail“
Hacer los métodos necesarios en la clase usuario
*/

class Usuario
{
    private $_nombre;
    private $_clave;
    private $_mail;


public function __construct($nombre, $clave, $mail){
    $this->setNombre($nombre);
    $this->setClave($clave);
    $this->setMail($mail);
}

// Setters

function setNombre($nombre){
    if (is_string($nombre) && !empty($nombre)) {
        $this->_nombre = $nombre;
    }
}

function setClave($clave){
    if (is_string($clave) && !empty($clave)) {
        $this->_clave = $clave;
    }
}

function setMail($mail){
    if (is_string($mail) && !empty($mail)) {
        $this->_mail = $mail;
    }
}

// Getters


function getNombre(){
    return $this->_nombre;
}

function getClave(){
    return $this->_clave;
}

function getMail(){
    return $this->_mail;
}

public static function MostrarUsuario(String $usuario){
    echo "Nombre de usuario: ".$Usuario->usuario;
}

//

public function GuardarCSV():bool{
    $resultado = false;
    try 
    {
        $archivo = fopen("usuarios.csv", "a+");

        if ($archivo) 
        {
            fwrite($archivo, $this->getNombre().",".$this->getClave().",".$this->getMail().PHP_EOL);
            $resultado = true;
        }
    } 
    catch (\Throwable $th) 
    {
        echo "Error";
    }
    finally
    {
        fclose($archivo);
    }

    return $resultado;
}

private static function ListarUsuarios($usuarios=array()):bool
{
    $resultado = false;
    echo "<ul>";
    foreach ($usuarios as $usuario) 
    {
        echo "<li>".$usuario->getNombre()."</li>";
        echo "<li>".$usuario->getClave()."</li>";
        echo "<li>".$usuario->getMail()."</li>";
        $resultado = true;
    }
    echo "</ul>";

    return $resultado;
}


public static function LeerCSV($nombre):bool
{
    $archivo = fopen($nombre, "r");
    $usuarios = array();
    try 
    {
        while (!feof($archivo)) 
        {
            $cadena = fgets($archivo);
            if (!empty($cadena)) 
            {
                $cadena = str_replace(PHP_EOL, "", $cadena);
                $usuarioArray = explode(",", $cadena);
                array_push($usuarios, new Usuario($usuarioArray[0], $usuarioArray[1], $usuarioArray[2]));
            }
        }
    } 
    catch (\Throwable $th) 
    {
        echo "Error al leer el archivo <br>";
    }
    finally
    {
        fclose($archivo);
        return Usuario::ListUsers($users);
    }
}

public static function ValidarUsuario($mail, $clave, $nombre):bool
{
    $resultado = false;
    $usuarios = array();
    try 
    {
        $usuarios = Usuario::LeerCSV($nombre);
        if ($usuarios) 
        {
            foreach ($usuarios as $usuario) 
            {
                if ($user->getMail() == $mail && $user->getClave() == $clave) 
                {
                    $resultado = true;
                }
            }
        }
    } 
    catch (\Throwable $th) 
    {
        echo "Error al leer el archivo <br>";
    } 
    finally 
    {
        return $resultado;
    }
}

}

?>