<?php
include_once "../config/database.php";
include_once "../models/Car.php";

$database = new Database();
$db = $database->getConnection();
$car = new Car($db);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_car"])) {
    $car->create($_POST["brand"], $_POST["model"], $_POST["license_plate"], $_POST["price"]);
    header("Location: ../views/cars.php");
}
?>
