<?php

/*
Aplicación No 23 (Registro JSON)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000). 

Crear un dato con la fecha de registro , toma todos los datos y utilizar sus métodos para poder hacer
el alta, guardando los datos en usuarios.json y subir la imagen al servidor en la carpeta Usuario/Fotos/.

Retorna si se pudo agregar o no.

Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario.
*/
class Usuario
{
    public $_id;
    public $_nombre;
    public $_clave;
    public $_mail;
    public $_fechaDeRegistro;


    public function __construct($id, $nombre, $clave, $mail ,$fechaDeRegistro)
    {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setClave($clave);
        $this->setMail($mail);
        $this->setfechaDeRegistro($fechaDeRegistro);
    }

    public function setId($id)
    {
        if (is_string($id) && !empty($id)) 
        {
            $this->_id = $id;
        }
    }

    public function setNombre($nombre)
    {
        if (is_string($nombre) && !empty($nombre)) 
        {
            $this->_nombre = $nombre;
        }
    }

    public function setClave($clave)
    {
        if (is_string($clave) && !empty($clave)) 
        {
            $this->_clave = $clave;
        }
    }

    public function setMail($mail)
    {
        if (is_string($mail) && !empty($mail)) 
        {
            $this->_mail = $mail;
        }
    }

    public function setfechaDeRegistro($fechaDeRegistro)
    {
        if (is_string($fechaDeRegistro) && !empty($fechaDeRegistro)) 
        {
            $this->fechaDeRegistro = $fechaDeRegistro;
        }
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getClave()
    {
        return $this->_clave;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function getFechaDeRegistro()
    {
        return $this->_fechaDeRegistro;
    }

    public static function MostrarUsuario(String $usuario){
        echo "El usuario es: ".$Usuario->usuario;
    }

    public function GuardarCSV():bool
    {
        $resultado = false;
        try {
            $archivo = fopen("usuarios.csv", "a+");
            if ($archivo) 
            {
                fwrite($archivo, $this->getNombre().",".$this->getClave().",".$this->getMail().PHP_EOL);
                $resultado = true;
            }
        } 
        catch (\Throwable $th) 
        {
            echo "Error al guardar el archivo";
        }
        finally
        {
            fclose($archivo);
        }

        return $resultado;
    }


    private static function ListarUsuarios($usuarios):bool
    {
        $resultado = false;
        echo "<ul>";
        foreach ($usuarios as $usuario) 
        {
            echo "<li>".$usuario->getId()."</li>";
            echo "<li>".$usuario->getNombre()."</li>";
            echo "<li>".$usuario->getClave()."</li>";
            echo "<li>".$usuario->getMail()."</li>";
            echo "<li>".$usuario->getFechaDeRegistro()."</li>";
            $resultado = true;
        }
        echo "</ul>";

        return $resultado;
    }


    /**
     * Reads a file with information of the users.
     * @return array The array with the information of the users.
     */
    public static function LeerCSV($nombre="usuarios.csv")
    {
        $archivo = fopen($nombre, "r");
        $usuarios = array();
        try 
        {
            while (!feof($archivo)) 
            {
                $line = fgets($archivo);
                if (!empty($line)) 
                {
                    $line = str_replace(PHP_EOL, "", $line);
                    $usuarioArray = explode(",", $line);
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
            return Usuario::ListarUsuarios($usuarios);
        }
    }

    /**
     * Saves a file with the information of the users.
     *
     * @param array $usersArray The array with the information of the users.
     * @param string $filename The name of the file.
     * @return boolean True if the file was saved successfully, false otherwise.
     */
    public function SaveToJSON($usersArray, $filename="Users.json"):bool{
        $success = false;
        try {
            $file = fopen($filename, "w");
            if ($file) {
                var_dump($usersArray);
                $json = json_encode($usersArray, JSON_PRETTY_PRINT);
                echo $json . '<br>';
                fwrite($file, $json);
                $success = true;
            }
        } catch (\Throwable $th) {
            echo "Error al guardar el archivo";
        } finally {
            fclose($file);
            return $success;
        }
    }

    /**
     * Reads a file with information of the users.
     *
     * @param string $filename The name of the file to read.
     * @return array The array with the information of the users.
     */
    public static function ReadJSON($filename="Users.json"):array{
        $users = array();
        
        try {
            $file = fopen($filename, "r");
            if ($file) {
                $json = fread($file, filesize($filename));
                $users = json_decode($json, true);

            }
        } catch (\Throwable $th) {
            echo "Error while reading the file";
        } finally {
            fclose($file);
            return $users;
        }
    }

    /**
     * Validates if a user exist in the file.
     * @return boolean True if the user exist, false otherwise.
     */
    public static function ValidateUser($email, $password):bool{
        $success = false;
        $users = array();
        try {
            $users = Usuario::ReadCSV();
            if ($users) {
                foreach ($users as $user) {
                    if ($user->getEmail() == $email && $user->getPassword() == $password) {
                        $success = true;
                    }
                }
            }
        } catch (\Throwable $th) {
            echo "Error while reading the file";
        } finally {
            return $success;
        }
    }

    public function errorMessageOfJSON(){
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                return "No ha ocurrido ningún error";
            case JSON_ERROR_DEPTH:
                return "Se ha excedido la profundidad máxima de la pila.";
            case JSON_ERROR_STATE_MISMATCH:
                return "Error por desbordamiento de buffer o los modos no coinciden";
            case JSON_ERROR_CTRL_CHAR:
                return "Error del carácter de control, posiblemente se ha codificado de forma incorrecta.";
            case JSON_ERROR_SYNTAX:
                return "Error de sintaxis.";
            case JSON_ERROR_UTF8:
                return "Caracteres UTF-8 mal formados, posiblemente codificados incorrectamente.";
            case JSON_ERROR_RECURSION:
                return "El objeto o array pasado a json_encode() incluye referencias recursivas y no se puede codificar.";
            case JSON_ERROR_INF_OR_NAN:
                return "El valor pasado a json_encode() incluye NAN (Not A Number) o INF (infinito)";
            case JSON_ERROR_UNSUPPORTED_TYPE:
                return "Se proporcionó un valor de un tipo no admitido para json_encode(), tal como un resource.";
            default:
                return "Error desconocido";
        }
    }
}

?>