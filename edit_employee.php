<?php
include("connection.php");
$con = connection();

// Verificar si los datos están llegando correctamente
var_dump($_POST);  // Esta línea te permitirá ver los datos enviados antes de ejecutar la consulta
// exit(); // Puedes quitar o dejar esta línea comentada si quieres pausar la ejecución para ver los datos

// Recibir los datos del formulario
$id = $_POST['id'];  // Asegúrate de que el nombre del input sea 'id' en tu formulario de edición
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$date = $_POST['date'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
$department = $_POST['department'];

// Consulta SQL para actualizar los datos
$sql = "UPDATE employees SET 
            name='$name', 
            lastname='$lastname', 
            age='$age', 
            date='$date', 
            comments='$comments', 
            gender='$gender', 
            department='$department' 
        WHERE id='$id'";

// Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($con, $sql)) {
    echo "Datos actualizados correctamente.";
    // Redirigir a la página principal solo si la consulta fue exitosa
    header("Location: index.php");
} else {
    // Mostrar el error si la consulta falla
    echo "Error al actualizar los datos: " . mysqli_error($con);
}
?>