<?php
require_once 'config/Database.php';

class Product {
    private $conn;
    private $table_name = "products";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table_name . " (name, reference, price, weight, category, stock, creation_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$data['name'], $data['reference'], $data['price'], $data['weight'], $data['category'], $data['stock'], $data['creation_date']]);
    }

    public function update($id, $data) {
        $query = "UPDATE " . $this->table_name . " SET name = ?, reference = ?, price = ?, weight = ?, category = ?, stock = ?, creation_date = ?, last_sale_date = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$data['name'], $data['reference'], $data['price'], $data['weight'], $data['category'], $data['stock'], $data['creation_date'], $data['last_sale_date'], $id]);
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    public function reduceStock($id) {
        $product = $this->getById($id);
        if ($product && $product['stock'] > 0) {
            $new_stock = $product['stock'] - 1;
            $query = "UPDATE " . $this->table_name . " SET stock = ?, last_sale_date = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$new_stock, date('Y-m-d H:i:s'), $id]);
            return true;
        } else {
            return false;
        }
    }
}
?>
