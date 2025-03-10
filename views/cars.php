<?php
include_once "../controllers/CustomerController.php";
include_once "../controllers/CarController.php";
include_once "../controllers/PurchaseController.php";

// Obtener clientes
$customers = (new Customer($db))->readAll();

// Obtener todos los coches registrados
$query = "SELECT * FROM cars";
$stmt = $db->prepare($query);
$stmt->execute();
$cars = $stmt; // Cargar todos los coches disponibles

// Registrar un coche (si el formulario es enviado)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_car"])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $license_plate = $_POST['license_plate'];
    $price = $_POST['price'];

    // Registrar coche en la base de datos
    $carController = new Car($db);
    $carController->create($brand, $model, $license_plate, $price);

    // Redirigir para refrescar la página
    header("Location: cars.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Coche y Compra</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <div class="container">
        <h1>Registrar Coche y Compra</h1>
        
        <!-- Formulario para registrar coche -->
        <h2>Registrar un Coche</h2>
        <form action="cars.php" method="POST">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="brand" required>

            <label for="model">Modelo:</label>
            <input type="text" name="model" id="model" required>

            <label for="license_plate">Placa:</label>
            <input type="text" name="license_plate" id="license_plate" required>

            <label for="price">Precio:</label>
            <input type="number" name="price" id="price" required>

            <input type="submit" name="add_car" value="Registrar Coche">
        </form>
        
        <!-- Formulario para registrar compra -->
        <h2>Registrar Compra</h2>
        <form action="../controllers/PurchaseController.php" method="POST">
            <label for="customer_id">Cliente:</label>
            <select name="customer_id" id="customer_id" required>
                <?php while ($customer = $customers->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $customer['id']; ?>"><?php echo $customer['name']; ?></option>
                <?php } ?>
            </select>
            
            <label for="car_id">Coche:</label>
            <select name="car_id" id="car_id" required>
                <?php while ($car = $cars->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $car['id']; ?>"><?php echo $car['brand'] . " " . $car['model']; ?></option>
                <?php } ?>
            </select>

            <label for="date">Fecha de Compra:</label>
            <input type="date" name="date" id="date" required>

            <input type="submit" name="add_purchase" value="Registrar Compra">
        </form>
    </div>

</body>
</html>
