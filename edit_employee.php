<?php
include("connection.php");
$con = connection();

var_dump($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$date = $_POST['date'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
$department = $_POST['department'];

$sql = "UPDATE employees SET 
            name='$name', 
            lastname='$lastname', 
            age='$age', 
            date='$date', 
            comments='$comments', 
            gender='$gender', 
            department='$department' 
        WHERE id='$id'";

if (mysqli_query($con, $sql)) {
    echo "Datos actualizados correctamente.";
    header("Location: index.php");
} else {
    echo "Error al actualizar los datos: " . mysqli_error($con);
}
?>