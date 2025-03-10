<?php
include_once "../config/database.php";
include_once "../models/Customer.php";

$database = new Database();
$db = $database->getConnection();
$customer = new Customer($db);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_customer"])) {
    // Crear un cliente
    $customer->create($_POST["name"], $_POST["dni"], $_POST["phone"], $_POST["email"]);
    
    // Redirigir automáticamente a la página de registro de coches
    header("Location: ../views/cars.php");
    exit();  // Asegúrate de terminar la ejecución para evitar que se ejecute el código posterior
}
?>

