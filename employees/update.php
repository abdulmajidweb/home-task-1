<?php
session_start();
//include connect page
include('connect.php');
if (isset($_GET['id']) && $_GET['id'] != NULL) {
	$id = $_GET['id'];
	//store variable for insert student
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$salary = $_POST['salary'];

	$sql = "UPDATE employees
			SET name = '$name',
			email = '$email',
			phone = '$phone',
			address = '$address',
			salary = $salary
			WHERE id = $id";
	if ($conn->query($sql)) {
		$_SESSION['success'] = "Seccessfully employee updated!";
	} else {
		$_SESSION['error'] = "Employee not updated!";
	}
} else {
	$_SESSION['error'] = "Something went wrong!";
}
header("Location: select.php");