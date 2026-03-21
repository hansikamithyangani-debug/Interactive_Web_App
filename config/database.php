<?php
// config/database.php - Simple database connection
class Database {
    private $host = "localhost";
    private $db_name = "medicare_plus";
    private $username = "root";     // XAMPP default
    private $password = "";         // XAMPP default (empty)
    private $conn;

    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
            return null;
        }
    }
    
    // Helper function to execute queries
    public function executeQuery($sql, $params = []) {
        try {
            $conn = $this->getConnection();
            if (!$conn) return false;
            
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            echo "Query Error: " . $e->getMessage();
            return false;
        }
    }
}
?>