<?php
require_once '../conexion/conexion.php';

class Usuario {
    private $id;
    private $email;
    private $password;
    const TABLA = 'Usuario';

    public function getId() {
        return $this->id;
    }

    public function getemail() {
        return $this->email;
    }

    public function getpassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setemail($email) {
        $this->email = $email;
    }

    public function setpassword($password) {
        $this->password = $password;
    }

    public function __construct($email, $password, $id = null) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }

    public function guardar() {
        $conexion = new Conexion();

        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (email, password) VALUES(:email, :password)');

        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':password', $this->password);

        if ($consulta->execute()) {
            $this->id = $conexion->lastInsertId();
            $conexion = null;
            return true;
        } else {
            $conexion = null;
            return false;
        }
    }

    public function validarusuario() {
        if ($this->email == '' || $this->password == '') {
            return false;
        }
    
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT COUNT(*) FROM Registrarse WHERE email = :email AND password = :password');
        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':password', $this->password);
        $consulta->execute();
    
        $resultado = $consulta->fetchColumn();
        $conexion = null;
    
        if ($resultado > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>
