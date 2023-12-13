<?php
require_once '../conexion/conexion.php';
class  ServicioDeSoporte {
    private $id;
    private $name;
    private $correo;
    private $phone;
    private $affair;
    private $Message;
    const TABLA = 'ServicioDeSoporte';
    public function getId() {
        return $this->id;
    }
    public function getNombre(){
        return $this->name;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getphone() {
        return $this->phone;
    }
    public function getaffair() {
        return $this->affair;
    }
    public function getMessage() {
        return $this->Message;
    }
    public function setid($id) {

        $this->id = $id;
  
    }
    public function setname($name) {

        $this->name = $name;
  
    }
    public function setcorreo($correo) {

        $this->correo = $correo;
  
    }
    public function setphone($phone) {

        $this->phone = $phone;
  
    }
    public function setaffair($affair) {

        $this->affair = $affair;
  
    }
    public function setMessage($Message) {

        $this->Message = $Message;
  
    }

    public function __construct($name, $correo, $phone, $affair, $Message, $id=null){
        $this->id = $id;
        $this->name = $name;
        $this->correo = $correo;
        $this->phone = $phone;
        $this->affair = $affair;
        $this->Message = $Message;
    }
    public function guardar(){

        $conexion = new Conexion();
  
  {
  
           $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id, name, correo, phone, affair, Message) VALUES(:id, :name, :correo, :phone, :affair, :Message)');
  
           $consulta->bindParam(':id', $this->id);
           $consulta->bindParam(':name', $this->name);
           $consulta->bindParam(':correo', $this->correo);
           $consulta->bindParam(':phone', $this->phone);
           $consulta->bindParam(':affair', $this->affair);
           $consulta->bindParam(':Message', $this->Message);
           $consulta->execute();
           $this->id = $conexion->lastInsertId();
  
        }
  
        $conexion = null;
  
    }

}
?>