<?php
require_once 'Usuario.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuario = new Usuario($nombre, $email, $password);
    
    if ($usuario->guardar()) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar usuario.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
