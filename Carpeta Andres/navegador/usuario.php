<?php
require_once 'Conexion.php';

class Usuario {
    private $nombre;
    private $email;
    private $password;
    private $db;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }

    public function guardar() {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->nombre, $this->email, $this->password);
        return $stmt->execute();
    }
}
?>
