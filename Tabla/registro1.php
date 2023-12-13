<?php
require_once("../Clases/Registrarse.php");

$conexion = new Conexion();


$consulta = $conexion->query('SELECT * FROM Registrarse');

$data = [];
while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

$response = ['data' => $data];

header('Content-Type: application/json');
echo json_encode($response);

$conexion = null;
?>

