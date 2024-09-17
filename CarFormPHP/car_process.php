<?php
	include("car_form.php");
	$errors = [];
	$name = $_POST["name"];
	$Vehicle_manufacturer = $_POST["vehicle_manufacturer"];
	$Transmission = isset($_POST["transmission_type"]);

	if ($name == "") {
		$errors[] = "Name is Required";
	}
	if ($Vehicle_manufacturer == "Choose_Value") {
		$errors[] = "Please select a Vehicle Manufacturer";
	}
	if ($Transmission == null) {
		$errors[] = "Please select a Transmission Type";
	}
	if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
		die();
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
		<h1>Thank you</h1>
	</body>
</html>
