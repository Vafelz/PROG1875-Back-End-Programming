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
		<h1 id="header">Book a Home Car Service!</h1>

		<form action="bookings.php" method="post" id="eligibilityForm">
			<div class="container">
				<b>Contact Info</b>
				<div>
					<label for="name">Name:</label>
					<input type="text" id="name" name="name">
				</div>

				<div>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email">
				</div>

				<div>
					<label for="phone">Phone:</label>
					<input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
				</div>

				<br>

				<!-- Car Info -->
				<b>Car Info</b>
				<div>
					<label for="make">Car Make:</label>
					<input type="text" id="make" name="make">
				</div>
				<div>
					<label for="model">Car Model:</label>
					<input type="text" id="model" name="model">
				</div>
				<div>
					<label for="year">Car Year:</label>
					<select id="year" name="year">
						<?php
							$years[] = date("Y");
							for ($i = 0; $i < 10; $i++) {
								$years[$i+1] = $years[$i] - 1;
								echo "<option>$years[$i]</option>";
							}
						?>
					</select>
				</div>

				<br>

				<div>
					<label for="service">Service Type:</label>
					<select id="service" name="service">
						<option value="oil">Oil Change</option>
						<option value="tire">Tire Change</option>
						<option value="break">Break Inspection</option>
						<option value="full">Full Car Service</option>
					</select>
				</div>

				<br>

				<button type="submit">Check</button>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>