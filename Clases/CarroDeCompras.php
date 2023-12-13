<?php
class CarroDeCompras {
  private $id;
  private $idUsuario;
  private $idProducto;
  private $cantidad;
  private $precioTotal;

  const TABLA = 'CarroDeCompras';

  public function getId() {
      return $this->id;
  }

  public function getIdUsuario() {
      return $this->idUsuario;
  }

  public function getIdProducto() {
      return $this->idProducto;
  }

  public function getCantidad() {
      return $this->cantidad;
  }

  public function getPrecioTotal() {
      return $this->precioTotal;
  }

  public function setId($id) {
      $this->id = $id;
  }

  public function setIdUsuario($idUsuario) {
      $this->idUsuario = $idUsuario;
  }

  public function setIdProducto($idProducto) {
      $this->idProducto = $idProducto;
  }

  public function setCantidad($cantidad) {
      $this->cantidad = $cantidad;
  }

  public function setPrecioTotal($precioTotal) {
      $this->precioTotal = $precioTotal;
  }

  public function __construct($idUsuario, $idProducto, $cantidad, $precioTotal, $id=null) {
      $this->id = $id;
      $this->idUsuario = $idUsuario;
      $this->idProducto = $idProducto;
      $this->cantidad = $cantidad;
      $this->precioTotal = $precioTotal;
  }

  public function guardar(){

    $conexion = new Conexion();

{

       $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id, idUsuario, idProducto, cantidad, precioTotal) VALUES(:id, :dUsuario, :idProducto, :cantidad, :precioTotal)');

       $consulta->bindParam(':id', $this->id);
       $consulta->bindParam(':idUsuario', $this->idUsuario);
       $consulta->bindParam(':idProducto', $this->idProducto);
       $consulta->bindParam(':cantidad', $this->cantidad);
       $consulta->bindParam(':precioTotal', $this->precioTotal);
       $consulta->execute();
       $this->id = $conexion->lastInsertId();

    }

    $conexion = null;

}
}

?>