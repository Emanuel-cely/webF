<?php
require_once("../Clases/Articulo.php");
$objEmployee = new Articulo ($_POST['nombre'], $_POST['price'], $_POST['affair'], $_POST['message']);

$objEmployee->guardar();

header('Location: ../Inicio/Inicio.html');
exit;
?>