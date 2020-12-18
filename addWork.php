<?php
session_start();  
$img_direct = "img/";
$img_name = $img_direct . basename($_FILES["file"]["name"]);
$upload = move_uploaded_file($_FILES["file"]["tmp_name"], $img_name);

$con = mysqli_connect('127.0.0.1', 'root', '', 'ProjectWithSensei');

$insert = "INSERT INTO works (id, description, file, student_id)
VALUES ('0', '{$_POST["desc"]}', '{$img_name}', '{$_SESSION["student_id"]}')";
$query = mysqli_query($con, $insert);



header("Location: accountStudent.php");
?>