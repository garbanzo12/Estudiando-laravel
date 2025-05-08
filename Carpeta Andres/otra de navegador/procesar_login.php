<!-- esto es para procesar el login usando poo -->
<?php

class LoginProcessor {  // Clase para procesar el login usando poo (objeto) 
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = ''; // Cambia esto si tienes una contraseña
    private $db_name = ''; // Cambia esto por el nombre de tu base de datos
    private $conn;

    public function __construct() { // usamos public function __construct() para inicializar la conexión a la base de datos
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function processLogin($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($query); //ESTO ES PARA PROCESAR EL LOGIN Y SEGURO QUE SEA EL MEJOR MANERA se usa el mysqli_real_escape_string para evitar inyecciones SQL
        // si el usuario y la contraseña son correctos, se inicia la sesión
        if ($result->num_rows == 1) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            return true;
        }
        return false;
    }

    public function __destruct() {
        $this->conn->close();
    }
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = new LoginProcessor();
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($login->processLogin($username, $password)) {
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>