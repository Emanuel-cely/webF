<?php
require_once("../Clases/Registrarse.php");
$objEmployee = new registrarse ($_POST['name'], $_POST['email'], $_POST['password']);

$objEmployee->guardar();
header('Location: ../inicio_sesion/isesion.html');
exit;

?>