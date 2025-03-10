<?php
include "../controllers/CustomerController.php";
$customers = $customer->readAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Clientes</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Teléfono</th>
            <th>Correo</th>
        </tr>
        <?php while ($row = $customers->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["dni"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<form action="../controllers/CustomerController.php" method="post">
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="text" name="dni" placeholder="DNI" required>
    <input type="text" name="phone" placeholder="Teléfono" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <button type="submit" name="add_customer">Agregar Cliente</button>
</form>
