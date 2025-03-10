<?php
include "../controllers/PurchaseController.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Compras</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <div class="container">
        <h1>Compras Realizadas</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Coche</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $allPurchases->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row["customer_name"]; ?></td>
                        <td><?php echo $row["car_brand"] . " " . $row["car_model"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>

