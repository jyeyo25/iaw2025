<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Préstamo</title>
</head>
<body>
    <h2>Registrar Préstamo</h2>
    <form action="registrar_prestamo.php" method="post">
        <label for="usuario_id">ID Usuario:</label>
        <input type="number" id="usuario_id" name="usuario_id" required>
        <br>
        <label for="libro_id">ID Libro:</label>
        <input type="number" id="libro_id" name="libro_id" required>
        <br>
        <button type="submit">Registrar Préstamo</button>
    </form>
    <?php
    require 'conexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario_id = $_POST['usuario_id'];
        $libro_id = $_POST['libro_id'];
        $fecha_prestamo = date('Y-m-d');
        
        $sql = "INSERT INTO prestamos (usuario_id, libro_id, fecha_prestamo) VALUES ('$usuario_id', '$libro_id', '$fecha_prestamo')";
        $sql_update = "UPDATE libros SET disponible = 0 WHERE id = '$libro_id'";
        
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_update)) {
            echo "Préstamo registrado correctamente";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>