<?php
// creating connection(globally)
$conn = new mysqli('localhost','root','','lab');


if (isset($_POST['app_btn'])) {

	$full = filter_input(INPUT_POST, 'fname');
	$fath = filter_input(INPUT_POST, 'ftname');
	$doc = filter_input(INPUT_POST, 'docname');
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$date = filter_input(INPUT_POST, 'date');
	$time = filter_input(INPUT_POST, 'time');
	$contact = filter_input(INPUT_POST, 'con');
	$email = filter_input(INPUT_POST, 'email');
	if (!empty($full) || !empty($fath) || !empty($doc) ||	!empty($date) || !empty($time) ||!empty($contact) || !empty($email)) {
		$sql = "INSERT INTO `appointment`(`fullname`, `fathername`, `test`, `city`, `state`, `date`, `time`, `contact`, `email`) VALUES ('$full', '$fath', '$doc', '$cty', '$state', '$date', '$time', '$contact', '$email') ";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('appointment.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}


?>