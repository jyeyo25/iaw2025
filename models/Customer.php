<?php
class Customer {
    private $conn;
    private $table_name = "customers";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($name, $dni, $phone, $email) {
        $query = "INSERT INTO " . $this->table_name . " (name, dni, phone, email) VALUES (:name, :dni, :phone, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":email", $email);
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
