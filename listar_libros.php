<?php
require 'conexion.php';
$result = mysqli_query($conn, "SELECT * FROM libros");
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " - Título: " . $row['titulo'] . " - Autor: " . $row['autor'] . " - Disponible: " . ($row['disponible'] ? "Sí" : "No") . "<br>";
}
?>