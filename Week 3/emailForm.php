<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign up for our newsletter</title>
	</head>

	<body>
		<h1 id="header">Sign up for our newsletter!</h1>

		<?php

			$provinces = array(
				'Alberta',
				'British Columbia',
				'Manitoba',
				'New Brunswick',
				'Newfoundland and Labrador',
				'Northwest Territories',
				'Nova Scotia',
				'Nunavut',
				'Ontario',
				'Prince Edward Island',
				'Quebec',
				'Saskatchewan',
				'Yukon'
			);
		?>

		<form action="register.php" method="post" id="registrationForm">
			<div>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" />
			</div>
			<div>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" />
			</div>
			<div>
				<label for="province">Province/Territory:</label>
				<select name="province">

					<?php
						foreach($provinces as $province) {
							echo "<option value=\"$province\">$province</option>";
						}
					?>

				</select>
			</div>


			<button type="submit">Submit</button>
		</form>
	</body>
</html>