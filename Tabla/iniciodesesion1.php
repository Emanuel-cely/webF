<?php
require_once("../Clases/Usuario.php");

$conexion = new Conexion();

$consulta = $conexion->query('SELECT * FROM Usuario');

$data = [];
while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
echo json_encode(['data' => $data]);
$conexion = null;
?>
