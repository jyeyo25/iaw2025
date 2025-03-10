<?php
class Database {
    private $host = "localhost";
    private $db_name = "concesionario";
    private $username = "usuario";  // Cambiar si tienes contraseña en MySQL
    private $password = "usuario";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
