<?php
require_once("../conexion/conexion.php");

$conexion = new Conexion();


$consulta_tabla1 = $conexion->query('SELECT * FROM registrarse');
$data_tabla1 = [];

while ($row = $consulta_tabla1->fetch(PDO::FETCH_ASSOC)) {
    $data_tabla1[] = $row;
}


$consulta_tabla2 = $conexion->query('SELECT * FROM serviciodesoporte');
$data_tabla2 = [];

while ($row = $consulta_tabla2->fetch(PDO::FETCH_ASSOC)) {
    $data_tabla2[] = $row;
}

$consulta_tabla3 = $conexion->query('SELECT * FROM usuario');
$data_tabla3 = [];

while ($row = $consulta_tabla3->fetch(PDO::FETCH_ASSOC)) {
    $data_tabla3[] = $row;
}

$consulta_tabla4 = $conexion->query('SELECT * FROM articulo');
$data_tabla4 = [];

while ($row = $consulta_tabla4->fetch(PDO::FETCH_ASSOC)) {
    $data_tabla4[] = $row;
}

$response = [
    'data_tabla1' => $data_tabla1,
    'data_tabla2' => $data_tabla2,
    'data_tabla3' => $data_tabla3,
    'data_tabla4' => $data_tabla4
];

header('Content-Type: application/json');

echo json_encode($response);

$conexion = null;
?>