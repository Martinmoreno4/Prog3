<?php

/*
Aplicación No 20 (Registro CSV)
Archivo: registro.php
método: POST

Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
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

public static function MostrarUsuario(String $usuario)
{
    echo "Nombre de usuario: ".$this->usuario;
}

//

public function GuardarCSV():bool
{
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


public static function LeerCSV($nombre="usuarios.csv"):bool
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
        echo "Error while reading the file";
    }
    finally
    {
        fclose($archivo);
        return Usuario::ListUsers($users);
    }
}

}



?>