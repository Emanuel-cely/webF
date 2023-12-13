<?php
require_once '../conexion/conexion.php';
class Articulo {
    private $id;
    private $nombre;
    private $price; 
    private $affair; 
    private $message; 
    const TABLA = 'Articulo';

    public function getId() {
        return $this->id;
    }
    public function getnombre(){ 
      return $this->nombre; 
    }
    public function getprice(){ 
        return $this->price; 
    }

    public function getaffair(){ 
        return $this->affair; 
    }
    public function getmessage(){ 
      return $this->message; 
  }
    public function setid($id) {

        $this->id = $id;
  
    }
    public function setnombre($nombre) {

        $this->nombre = $nombre;
  
    }
    public function setprice($price) {

        $this->price = $price;
  
    }
    public function setaffair($affair) {

        $this->affair = $affair;
  
    }
    public function setmessage($message) {

      $this->message = $message;

  }
    public function __construct($nombre,$price, $affair, $message, $id=null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->price = $price; 
        $this->affair = $affair; 
        $this->message = $message; 

    }
    public function guardar(){

        $conexion = new Conexion();
  
  {
  
           $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id, nombre, price, affair, message) VALUES(:id, :nombre, :price, :affair, :message)');
  
           $consulta->bindParam(':id', $this->id);
           $consulta->bindParam(':nombre', $this->nombre);
           $consulta->bindParam(':price', $this->price);
           $consulta->bindParam(':affair', $this->affair);
           $consulta->bindParam(':message', $this->message);
           $consulta->execute();
           $this->id = $conexion->lastInsertId();
  
        }
  
        $conexion = null;
  
    }
}
?>
