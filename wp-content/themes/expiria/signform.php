<?php
header('Content-Type: text/html; charset=UTF-8');
$con = mysqli_connect("127.0.0.1","expiria.netdbusr","WwurX9CujdFrLnZE","zalulpetitiondb");
$con->set_charset('utf8');

if (mysqli_connect_errno()) {
	//	echo "Failed to connect to MySQL: " . mysqli_connect_error();
        error_log("kidronPetition Failed to connet to MySQL on: " . date("Y-m-d H:i:s") . " with error - " . mysqli_connect_error() . " - " . $_POST["name"] . " - " . $_POST["email"] . " - " . $_POST["phone"] . + " - " . $_POST["agree"], 1, "judmojo@gmail.com");
	error_log(date("Y-m-d H:i:s") . " - FAILED TO REGISTER - " . $_POST["nmae"] . " - " . $_POST["email"] . " - " . $_POST["phone"] . "\n", 3, "/home/zalulorg/kidronPetition/failedregister.log");

	} else {
	// escape variables for security
	$name = addslashes($_POST["name"]);
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$agree = intval($_POST["agree"]);

	$sql="INSERT INTO kidronSignatures (name, email, phone, agree, time)
	VALUES ('$name', '$email', '$phone', '$agree', NOW())";

	if (!mysqli_query($con,$sql)) {
	  error_log('Error: ' . $sql, 0);
	  error_log("kidronSignatures Petition Failed to commit QUERY to MySQL on: " . date("Y-m-d H:i:s") . " with error - " . $sql . " - " . $_POST["name"] . " - " . $_POST["email"] . " - " . $_POST["phone"] . " - " . $_POST["agree"], 1, "judmojo@gmail.com");

	  die('Error: ' . mysqli_error($con));
	}
//	error_log("1 '$email' registered", 1, "judmojo@gmail.com");
//	echo "1 record added";

	mysqli_close($con);
}
?>
