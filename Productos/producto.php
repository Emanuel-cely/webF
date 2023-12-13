<?php

require_once("../Clases/CarroDeCompras.php");


$objCarrito = new CarroDeCompras ($_POST['idUsuario'], $_POST['idProducto'], $_POST['cantidad'], $_POST['precioTotal']);


echo $objCarrito->getidUsuario() . ' se ha guardado correctamente con el id: ' . $objCarrito->getId();

echo 'Nombre: ';
echo $objCarrito ->getidUsuario();
echo 'Producto: ';
echo $objCarrito ->getidProducto();
echo 'cantidad: ';
echo $objCarrito ->getcantidad();
echo 'precioTotal: ';
echo $objCarrito ->getprecioTotal();

?>
