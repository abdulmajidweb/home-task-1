<?php
session_start();
//include connect page
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add employee</title>
	<!-- bootstrp css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card mt-2">
					<div class="card-header text-info">Add employee <span class="ml-2"><a href="select.php" class="text-info btn btn-sm btn-outline-info">All employee</a></span></div>
					<?php include('message.php'); ?>
					<div class="card-body">
						<form action="store.php" method="POST">
						  <div class="form-group row">
						    <label for="name" class="col-sm-2 col-form-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="name" name="name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="email" class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" name="email">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="phone" name="phone">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="address" class="col-sm-2 col-form-label">Address</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="address" name="address">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="salary" class="col-sm-2 col-form-label">Salary</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" id="salary" name="salary">
						    </div>
						  </div>
						  <div class="form-group row">
						  	<div class="col-sm-2"></div>
						  	<div class="col-sm-10">
						  		<button type="submit" class="btn btn-info">Add</button>
						  	</div>
						  </div>
						</form>
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