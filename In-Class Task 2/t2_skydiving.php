<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Task 2: Sky Diving</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<div class="container">
		<?php
			// Checks for 'weight value'
			if(!empty($_REQUEST['weight'])) {
				$weight = $_REQUEST['weight'];
			} else {
				$weight = NULL;
				echo "<p>We need your weight to calculate your eligibility!</p>";
			}

			if($weight > 149 && $weight < 351) {
				echo "<p>You may sky dive!</p>";
			} else {
				echo "<p>You CANNOT sky dive.</p>";
			}
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>