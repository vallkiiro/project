<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'ProjectWithSensei');
$insert = "INSERT INTO apllications (student_id, univ_id)
VALUES ('{$_SESSION["student_id"]}', '{$_POST["univ_id"]}')";
$query = mysqli_query($con, $insert);

header("Location: index.php");
?>