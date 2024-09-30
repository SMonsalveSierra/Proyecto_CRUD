<?php

include("connection.php");
$con = connection();

$id=$_POST["employee_id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$date = $_POST['date'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
$department = $_POST['department'];


$sql="UPDATE employees SET name='$name', lastname='$lastname', age='$age', date='$date', comments='$comments', gender='$gender', department='$department' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>