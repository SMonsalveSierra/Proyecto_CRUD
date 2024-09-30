<?php
require_once __DIR__ . '/../models/employee.php';

class employee_controller {
    private $employeeModel;

    public function __construct() {
        $this->employeeModel = new employee();
    }

    public function listemployees() {
        return $this->employeeModel->getAllemployees();
    }

    public function addemployee($data) {
        $this->employeeModel->insertemployee($data);
        header("Location: ../index.php");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new employee_controller();
    $controller->addemployee($_POST);
}
?>