<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM employees WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
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
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <input type="text" name="age" placeholder="Edad" value="<?= $row['age']?>">
                <input type="text" name="date" placeholder="Fecha de ingreso" value="<?= $row['date']?>">
                <input type="text" name="comments" placeholder="Comentarios" value="<?= $row['comments']?>">
                <input type="text" name="gender" placeholder="Genero" value="<?= $row['gender']?>">
                <input type="text" name="department" placeholder="Departamento" value="<?= $row['department']?>">

                <input type="submit" value="Actualizar empleado">
            </form>
        </div>
    </body>
</html>