<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaderia La Geltrú</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = htmlspecialchars($_POST['cliente']);
        $baguetes = intval($_POST['baguetes']);
        $rolls = intval($_POST['rolls']);
        $sandwich_bread = intval($_POST['sandwich_bread']);
        echo "<h1>¡Pedido recibido!</h1>";
        echo "<p>Gracias, <strong>$cliente</strong>. Aquí está el resumen de tu pedido:</p>";
        echo "<ul>";
        echo "<li>Baguettes: $baguetes</li>";
        echo "<li>Rolls: $rolls</li>";
        echo "<li>Sandwich_bread: $sandwich_bread</li>";
        echo "</ul>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $cliente = htmlspecialchars($_GET['cliente']);
        $baguetes = intval($_GET['baguetes']);
        $rolls = intval($_GET['rolls']);
        $sandwich_bread = intval($_GET['sandwich_bread']);
        echo "<h1>¡Pedido recibido!</h1>";
        echo "<p>Gracias, <strong>$cliente</strong>. Aquí está el resumen de tu pedido:</p>";
        echo "<ul>";
        echo "<li>Baguettes: $baguetes</li>";
        echo "<li>Rolls: $rolls</li>";
        echo "<li>Sandwich_bread: $sandwich_bread</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>