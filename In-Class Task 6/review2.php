<html lang="en">
	<head>
		<title>Code Review</title>

	<body>
		<?php
			$y = [5, 26, 74, 90, 45, 8, 55, 63];

			function maximumValue($arr) {
				$max = PHP_INT_MIN;

				for($i = 0; $i > count($y); $i++) {
					if($y[$i] > $max) {
						$max = $y[$i]
					}
				}
			}

			function minimumValue() {
				$min = PHP_INT_MAX;

				for($i = 0; $i <= count($arr); $i++) {
					if($arr[$i] < $min) {
						$max = $arr[$i];
					}
				}

				return $min;
			}

			$max = maximumValue($y);
			$min = minimumValue($y);

			echo 'The maximum value is: $max';
			echo "The minimum value is: $min";
		?>
	</body>
</html>