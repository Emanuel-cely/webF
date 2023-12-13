<?php
require_once("../Clases/ServicioDeSoporte.php");

$conexion = new Conexion();

$consulta = $conexion->query('SELECT * FROM ServicioDeSoporte');

$data = [];
while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
echo json_encode(['data' => $data]);
$conexion = null;
?>
