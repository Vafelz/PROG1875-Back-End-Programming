<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Task 3: Car Service</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<div class="container">
		<?php
			// FUNCTION: Validate email
			function is_email_valid($email) {
				if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					return true;
				}
			}

			// Collect data
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$make = $_POST['make'];
			$model = $_POST['model'];
			$year = $_POST['year'];
			$service = $_POST['service'];

			// Check values for NULL
			if(empty($name)) {
				echo "<p>We need a name to complete your booking.</p>";
			} else if(!is_email_valid($email)) {
				$email = NULL;
				echo "<p>We need a email to complete your booking.</p>";
			} else if(empty($phone)) {
				echo "<p>We need a phone number to complete your booking.</p>";
			} else if(empty($make)) {
				echo "<p>We need a car make to complete your booking.</p>";
			} else if(empty($model)) {
				echo "<p>We need a car model to complete your booking.</p>";
			} else {
				echo "<p>Thanks for booking a service. We will contact you shortly.";
			}
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>