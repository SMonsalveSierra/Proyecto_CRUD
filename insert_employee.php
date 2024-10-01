<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$date = $_POST['date'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
$department = $_POST['department'];

$sql = "INSERT INTO employees VALUES('$id','$name','$lastname','$age','$date','$comments','$gender','$department')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>

