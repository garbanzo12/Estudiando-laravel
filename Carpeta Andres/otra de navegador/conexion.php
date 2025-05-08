<?php
class Conexion {
    private $host = "localhost";
    private $db = ""; // si tienen otro nombre de la base de datos la puedn cambiar 
    private $user = "root";
    private $pass = ""; // si tienen otra contraseña la pueden cambiar
    public $conn; 

    public function conectar() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
?>
