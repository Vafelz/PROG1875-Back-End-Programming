<!DOCTYPE html>
<html lang="en">
	<head>
	</head>

	<body>
		<?php
			$x = [1, 15, 23, 6, 7, 90, 3];
			$y = [5, 26, 74, 90, 45, 8, 55, 63];

			$found = false;

			for($i = 0; $i <= count($x); $i++) {
				for($j = 0; $i < count($y); $j++) {
					if($x[i] == $y[$j]) {
						$found = true
						break;
					}
				}
			}

			echo 'Found duplicate value: $found';

		?>

</html>