<?php
session_start();
//include connect page
include('connect.php');
if (isset($_GET['id']) && $_GET['id'] != NULL) {
	$id = $_GET['id'];
	$sql = "DELETE FROM employees WHERE id = $id";
	if ($conn->query($sql)) {
		$_SESSION['success'] = "Seccessfully employee deleted!";
	} else {
		$_SESSION['error'] = "Employee not deleted!";
	}
} else {
	$_SESSION['error'] = "Something went wrong!";
}
header("Location: select.php");