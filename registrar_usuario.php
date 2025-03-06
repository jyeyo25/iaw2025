<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form action="registrar_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Registrar Usuario</button>
    </form>
    <?php
    require 'conexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "Usuario registrado correctamente";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
