<?php
require_once("../Clases/ServicioDeSoporte.php");
$objEmployee = new ServicioDeSoporte ($_POST['nombre'], $_POST['Correo'], $_POST['phone'], $_POST['affair'], $_POST['message']);

$objEmployee->guardar();

header('Location: ../Inicio/Inicio.html');
exit;
?>