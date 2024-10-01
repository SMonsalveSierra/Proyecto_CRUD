<?php 
    include("connection.php");
    $con = connection();

    // Validamos que se haya recibido un 'id' por GET
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Consulta para obtener los datos del empleado por id
        $sql = "SELECT * FROM employees WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        // Verificamos si la consulta devuelve algún resultado
        if($query && mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_array($query);
        } else {
            // Si no hay resultados, redirigimos o mostramos un mensaje
            echo "Empleado no encontrado o consulta fallida.";
            exit();
        }
    } else {
        // Si no hay 'id' en la URL, mostramos un mensaje o redirigimos
        echo "ID no proporcionado.";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar empleado</title>
        
    </head>
    <body>
        <div class="employee-form">
            <form action="edit_employee.php" method="POST">
                <!-- Verificación adicional para asegurar que el campo 'id' exista -->
                <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : '' ?>">
                
                <input type="text" name="name" placeholder="Nombre" value="<?= isset($row['name']) ? $row['name'] : '' ?>">
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= isset($row['lastname']) ? $row['lastname'] : '' ?>">
                <input type="text" name="age" placeholder="Edad" value="<?= isset($row['age']) ? $row['age'] : '' ?>">
                <input type="text" name="date" placeholder="Fecha de ingreso" value="<?= isset($row['date']) ? $row['date'] : '' ?>">
                <input type="text" name="comments" placeholder="Comentarios" value="<?= isset($row['comments']) ? $row['comments'] : '' ?>">
                <input type="text" name="gender" placeholder="Genero" value="<?= isset($row['gender']) ? $row['gender'] : '' ?>">
                <input type="text" name="department" placeholder="Departamento" value="<?= isset($row['department']) ? $row['department'] : '' ?>">

                <input type="submit" value="Actualizar empleado">
            </form>
        </div>
    </body>
</html>