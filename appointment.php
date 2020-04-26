<!DOCTYPE html>
<html>
<head>
	<title>Appointment Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url('../single/assets/images/back.jpg');
			height: 180vh;
			width: 50vw;
		}
	</style>
</head>
<body>
<div class="container" style="padding: 50px;">
<div class="card" style="width: 400px; top: 400px; transform: translate(-45%, -50%); left: 50%; margin: 80px;">
	<div class="card-body" style="background-color: #408BFF; color: white;">
		<h3 align="center" style="text-align: center; font-family: serif;"><u>Create An Appointment</u></h3>
		<form class="form-group" method="post" action="connection.php">
		<label class="pt-4">Full Name:</label>
		<input type="text" name="fname" class="form-control" required autocomplete="off"><br>
		<label>Father's Name:</label>
		<input type="text" name="ftname" class="form-control" required autocomplete="off"><br>
		<label>Test:</label>
		<select class="form-control" name="docname" required>
			<option value="NULL">--Select--</option>
			<option value="CBC">Complete Blodd Count(CBC)</option>
			<option value="HB">Hemoglobin</option>
			<option value="Malaria">Malaria</option>
			<option value="Dengue">Dengue</option>
			<option value="Tuberculosis">Tuberculosis</option>
			<option value="Urine">Urine</option>
			<option value="Sperm counts">Sperm Counts</option>
			<option value="Juindice">Juindice</option>
			<option value="Liver Function Test">Liver Function Test</option>
			<option value="Thyroid Stimulating Hormone">Thyroid Stimulating Hormone</option>
		</select><br>
		<label>City:</label>
		<input type="text" name="city" class="form-control" autocomplete="off"><br>
		<label>State:</label>
		<input type="text" name="state" class="form-control" autocomplete="off"><br>
		<label>Date:</label>
		<input type="date" name="date" class="form-control" required autocomplete="off"><br>
		<label>Time:</label>
		<input type="time" name="time" class="form-control" required autocomplete="off"><br>
		<label>Contact:</label>
		<input type="numeric" name="con" class="form-control" required autocomplete="off"><br>
		<label>Email:</label>
		<input type="email" name="email" class="form-control" required autocomplete="off"><br>
		<div>
		<input type="submit" name="app_btn" value="Submit" class="btn btn-danger  btn-block">
		</div>
		</form>
	</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>