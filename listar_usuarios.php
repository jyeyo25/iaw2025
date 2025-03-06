<?php
require 'conexion.php';
$result = mysqli_query($conn, "SELECT * FROM usuarios");
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . " - Email: " . $row['email'] . "<br>";
}
?>