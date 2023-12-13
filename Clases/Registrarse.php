<?php
require_once '../conexion/conexion.php';
class Registrarse {
    private $id;
    private $name;
    private $email; 
    private $password; 
    const TABLA = 'Registrarse';

    public function getId() {
        return $this->id;
    }
    public function getname(){ 
      return $this->name; 
    }
    public function getemail(){ 
        return $this->email; 
    }

    public function getpassword(){ 
        return $this->password; 
    }
    public function setid($id) {

        $this->id = $id;
  
    }
    public function setname($name) {

        $this->name = $name;
  
    }
    public function setemail($email) {

        $this->email = $email;
  
    }
    public function setpassword($password) {

        $this->password = $password;
  
    }
    public function __construct($name,$email, $password, $id=null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email; 
        $this->password = $password; 

    }
    public function guardar(){

        $conexion = new Conexion();
  
  {
  
           $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id, name, email, password) VALUES(:id, :name, :email, :password)');
  
           $consulta->bindParam(':id', $this->id);
           $consulta->bindParam(':name', $this->name);
           $consulta->bindParam(':email', $this->email);
           $consulta->bindParam(':password', $this->password);
           $consulta->execute();
           $this->id = $conexion->lastInsertId();
  
        }
  
        $conexion = null;
  
    }
}
?>