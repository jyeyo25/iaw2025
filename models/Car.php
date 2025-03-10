<?php
class Car {
    private $conn;
    private $table_name = "cars";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($brand, $model, $license_plate, $price) {
        $query = "INSERT INTO " . $this->table_name . " (brand, model, license_plate, price) VALUES (:brand, :model, :license_plate, :price)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":model", $model);
        $stmt->bindParam(":license_plate", $license_plate);
        $stmt->bindParam(":price", $price);
        return $stmt->execute();
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
