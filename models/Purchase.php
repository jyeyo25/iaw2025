<?php
class Purchase {
    private $conn;
    private $table_name = "purchases";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Obtener todas las compras
    public function getAllPurchases() {
        $query = "
            SELECT p.id, c.name AS customer_name, ca.brand AS car_brand, ca.model AS car_model, p.date
            FROM " . $this->table_name . " p
            JOIN customers c ON p.customer_id = c.id
            JOIN cars ca ON p.car_id = ca.id
            ORDER BY p.date DESC
        ";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Crear una compra
    public function create($customer_id, $car_id, $date) {
        $query = "INSERT INTO " . $this->table_name . " (customer_id, car_id, date) VALUES (:customer_id, :car_id, :date)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":customer_id", $customer_id);
        $stmt->bindParam(":car_id", $car_id);
        $stmt->bindParam(":date", $date);
        return $stmt->execute();
    }
}
?>
