<?php
session_start();
//include connect page
include('connect.php');
//store variable for insert student
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$salary = $_POST['salary'];
//insert student
$sql = "INSERT INTO employees
		VALUES(NULL, '$name', '$email', '$phone', '$address', $salary)";
//check insert student confirm
if ($conn->query($sql)) {
	$_SESSION['success'] = "Successfully employee added!";
} else {
	$_SESSION['error'] = "Employee not added!";
}
header("Location: insert.php");