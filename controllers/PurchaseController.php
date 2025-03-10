<?php
include_once "../config/database.php";
include_once "../models/Purchase.php";
include_once "../models/Customer.php";
include_once "../models/Car.php";

$database = new Database();
$db = $database->getConnection();
$purchase = new Purchase($db);

// Crear la compra
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_purchase"])) {
    $purchase->create($_POST["customer_id"], $_POST["car_id"], $_POST["date"]);
    header("Location: ../views/purchase.php");
    exit();
}

// Obtener todas las compras para mostrarlas en la vista
$allPurchases = $purchase->getAllPurchases();
?>

