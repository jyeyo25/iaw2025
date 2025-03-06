<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
</head>
<body>
    <h2>Registrar Libro</h2>
    <form action="registrar_libro.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        <br>
        <button type="submit">Registrar Libro</button>
    </form>
    <?php
    require 'conexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        
        $sql = "INSERT INTO libros (titulo, autor, disponible) VALUES ('$titulo', '$autor', 1)";
        if (mysqli_query($conn, $sql)) {
            echo "Libro registrado correctamente";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>