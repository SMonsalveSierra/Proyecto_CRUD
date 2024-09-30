<?php
require_once __DIR__ . '/../connection.php';

class employee {
    private $conn;

    public function __construct() {
        $this->conn = connection();
    }

    public function getAllemployees() {
        $sql = "SELECT id, name, lastname, age, date, comments, gender, department FROM employees";
        $result = mysqli_query($this->conn, $sql);
        
        if (!$result) {
            die("Error en la consulta SQL: " . mysqli_error($this->conn));
        }

        return $result;
    }

    public function insertemployee($data) {
        $sql = "INSERT INTO employees (name, lastname, age, date, comments, gender, department)
                VALUES ('{$data['name']}', '{$data['lastname']}', '{$data['age']}', '{$data['date']}', '{$data['comments']}', '{$data['gender']}', '{$data['department']}')";
        return mysqli_query($this->conn, $sql);
    }
}
?>


