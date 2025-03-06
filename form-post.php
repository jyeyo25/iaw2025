<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $baguettes = intval($_POST['baguettes']);
    $panecillos = intval($_POST['panecillos']);
    $panmolde = intval($_POST['panmolde']);

    $fecha = date("Y-m-d H:i:s");
    $resumen = "Fecha: $fecha\nNombre: $nombre\nBaguettes: $baguettes\nPanecillos: $panecillos\nPan de Molde: $panmolde\n--------------------------\n";

    file_put_contents("pedidos.txt", $resumen, FILE_APPEND);

    echo "<h1>¡Pedido recibido!</h1>";
    echo "<p>Gracias, <strong>$nombre</strong>. Aquí está el resumen de tu pedido:</p>";
    echo "<ul>";
    echo "<li>Baguettes: $baguettes</li>";
    echo "<li>Panecillos: $panecillos</li>";
    echo "<li>Pan de Molde: $panmolde</li>";
    echo "</ul>";
    echo "<p><a href='/formulariopost.php'>Volver al formulario</a></p>";
} else {
    echo "Método no permitido.";
}
?>
