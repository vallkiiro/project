<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'ProjectWithSensei');
$select = "SELECT * FROM students WHERE phone = '{$_POST["phone"]}' AND password = '{$_POST["password"]}'";
$query = mysqli_query($con, $select);

if (mysqli_num_rows($query)>0) {
	$student = $query->fetch_assoc();
	$_SESSION["student_id"] = $student["id"];
	header("Location: accountStudent.php");
} else {
	header("Location: loginStudent.php");
}
?>