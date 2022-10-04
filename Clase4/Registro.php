<?php
    
    require_once 'ejercicio_23.php';
    require_once 'ejercicio_23_controlador.php';

    $option = $_GET['task'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $newID = 0;
    $firstRegister = false;


    $UpManager = new UploadManager($_FILES);
    var_dump($option);

    switch ($option) {
        case 'register':
            if (!$firstRegister) {
                $firstRegister = true;
                $newID = rand(1, 10001);
            } else {
                $newID +=1;
            }
            $registerDate = new DateTime("now");
            $user = new Usuario($newID, $name, $password, $email, $registerDate->format('d-m-Y H:m:s'));

            $myArray = Usuario::ReadJSON();

            array_push($myArray, $user);
            
            if ($user->SaveToJSON($myArray)) {
                echo $user->errorMessageOfJSON().'<br>';
                echo "Usuario guardado correctamente<br>";
            } else {
                echo "Error al guardar el usuario";
            }

            if ($UpManager->saveFileIntoDir($_FILES)) {
                echo "Archivo guardado correctamente<br>";
            }
            break;
    }
?>