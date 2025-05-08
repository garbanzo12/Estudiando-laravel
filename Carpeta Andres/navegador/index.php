<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro</h2>
        <form action="procesar_registro.php" method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Contraseña:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Registrar">
        </form>
</body>
</html>
