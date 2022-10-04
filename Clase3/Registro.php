

    <?php

    require_once "ejercicio_20_2.php";

    $option  = "";
    $nombre = "";
    $clave = "";
    $mail = "";

    $option  = $_GET["task"];
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $mail = $_POST["mail"];

    //var_dump($option);

    switch ($option) 
    {
        case "create":
            $usuario = new Usuario($nombre, $clave, $mail);
            if($usuario->GuardarCSV())
            {
                echo "Usuario creado correctamente";
            }
            break;
    }


    ?>