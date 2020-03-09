<?php
session_start();
//include connect page
include('connect.php');
if (isset($_GET['id']) && $_GET['id'] != NULL) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM employees WHERE id = $id";
	$result = $conn->query($sql);
	$row = $result->fetch_object();
} else {
	$_SESSION['error'] = "Something went wrong!";
	header("Location: select.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All employee</title>
	<!-- bootstrp css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card mt-2">
					<div class="card-header text-info">Employee Information <span class="ml-2"><a href="select.php" class="text-info btn btn-sm btn-outline-info">All employee</a></span></div>
					<?php include('message.php'); ?>
					<div class="card-body">
						<table class="table table-bordered table-sm table-responsive-sm">
							<tr>
								<th>Name</th>
								<td><?php echo $row->name; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $row->email; ?></td>
							</tr>
							<tr>
								<th>Phone</th>
								<td><?php echo $row->phone; ?></td>
							</tr>
							<tr>
								<th>Address</th>
								<td><?php echo $row->address; ?></td>
							</tr>
							<tr>
								<th>Salary</th>
								<td><?php echo $row->salary; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- jquery and bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>