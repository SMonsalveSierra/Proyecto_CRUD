<?php
require_once 'controllers/employee_controller.php';

$employee_controller = new employee_controller();
$employees = $employee_controller->listemployees();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD_Empleados</title>
</head>

<body>
    <div class="employee-form">
        <h1>Registrar empleado</h1>
        <form action="insert_employee.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="age" placeholder="Edad">
            <input type="text" name="date" placeholder="Fecha de ingreso">
            <input type="text" name="comments" placeholder="Comentarios">
            <input type="text" name="gender" placeholder="Genero">
            <input type="text" name="department" placeholder="Departamento">

            <input type="submit" value="Agregar empleado">
        </form>
    </div>

    <div class="employee-table">
        <h2>Empleados registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Fecha de ingreso</th>
                    <th>Comentarios</th>
                    <th>Genero</th>
                    <th>Departamento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($employees)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['age'] ?></th>
                        <th><?= $row['date'] ?></th>
                        <th><?= $row['comments'] ?></th>
                        <th><?= $row['gender'] ?></th>
                        <th><?= $row['department'] ?></th>
                        <th><a href="update_employee.php?id=<?= $row['id'] ?>" class="employee-table--edit">Editar</a></th>
                        <th><a href="delete_employee.php?id=<?= $row['id'] ?>" class="employee-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="js/main.js"></script>

</body>

</html>