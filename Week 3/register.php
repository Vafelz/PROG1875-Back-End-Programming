<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign up for our newsletter</title>
	</head>

	<body>
		<?php

			$capitals = [
				'Alberta' => 'Calgary',
				'British Columbia' => 'Vancouver',
				'Manitoba' => 'Winnipeg',
				'New Brunswick' => 'Moncton',
				'Newfoundland and Labrador' => 'St. John\'s',
				'Northwest Territories' => 'Yellowknife',
				'Nova Scotia' => 'Halifax',
				'Nunavut' => 'Iqaluit',
				'Ontario' => 'Toronto',
				'Prince Edward Island' => 'Charlottetown',
				'Quebec' => 'Montreal',
				'Saskatchewan' => 'Saskatoon',
				'Yukon' => 'Whitehorse'
			];

			if(!empty($_POST['name'])) {
				$name = $_POST['name'];
			} else {
				$name = NULL;
				echo "<p>We need your name if you want to get our newsletter.</p>";
			}

			function is_email_valid($email) {
				if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					return true;
				}
			}

			$email = $_POST['email'];

			if(!is_email_valid($email)) {
				$email = NULL;
				echo "<p>We need your email if you want to get our newsletter.</p>";
			}

			if(isset($_POST['province'])) {
				$province = $_POST['province'];
			} else {
				$province = NULL;
				echo "<p>We need to know whereabouts you live.</p>";
			}

			if($name && $email) {
				echo "<p>Thank you $name for your submission.</p>";
				echo "<p>We will send only the best things to your email: $email.</p>";
				echo "<p>Did you know that $capitals[$province] is the capital of $province?</p>";
			}
		?>
	</body>
</html>