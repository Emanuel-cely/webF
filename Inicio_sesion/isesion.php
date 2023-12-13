<?php
require_once("../Clases/Usuario.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $objEmployee = new usuario($email, $password);


    if ($objEmployee->validarusuario()) {

        $objEmployee->guardar();

        header('Location: ../inicio/inicio.html');
        exit;
    } else {
        header('Location: ../inicio_sesion/isesion.html');
        exit;
    }
}
?>


